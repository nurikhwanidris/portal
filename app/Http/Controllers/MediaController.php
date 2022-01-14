<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('spsm.admin.media.index', [
            'link' => '/spsm/admin/media',
            'leadCrumbs' => 'Media',
            'title' => 'Koleksi Media',
            'text' => '',
            'images' => Media::with('user')->orderBy('created_at', 'desc')->paginate(72),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.media.create', [
            'link' => '/spsm/admin/media',
            'leadCrumbs' => 'Media',
            'title' => 'Muatnaik Media Baru',
            'text' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaRequest $request)
    {
        // Validate Data
        $validateData = $request->validate([
            'mediaUpload' => 'required|image|max:512',
        ]);

        $filenamewithextension = $request->file('mediaUpload')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('mediaUpload')->getClientOriginalExtension();

        //filename to store
        $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

        // Store with filename
        $request->file('mediaUpload')->storeAs('public/upload/img', $filenametostore);

        // Upload directory
        $path = '/storage/upload/img/';

        $save = new Media;

        $save->user_id = $request->user()->id;
        $save->filename = $filenametostore;
        $save->path = $path . $filenametostore;

        $save->save();

        return redirect('/spsm/admin/media')->with('success', 'Satu media baharu telah berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaRequest  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        // Delete from directory
        if ($media->images) {
            Storage::delete($media->images);
        }

        // Delete from table
        Media::destroy($media->id);

        // Redirect with message
        return redirect('/spsm/admin/media')->with('success', 'A media has been deleted from the database and directory');
    }
}
