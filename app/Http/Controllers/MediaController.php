<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use App\Models\Page;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;

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
            'text' => 'This is just a test page for now',
            'images' => DB::table('media')->paginate(72),
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
            'text' => 'This is just a test page for now',
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
        // Store the data
        Media::create([
            'user_id' => $request['user_id'] = auth()->user()->id,
            'filename' => 'asd',
            'path' => 'asd/asd/asd',
        ]);

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
        //
    }
}
