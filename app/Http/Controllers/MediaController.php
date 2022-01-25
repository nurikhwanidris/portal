<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Slider;
use App\Models\Status;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($media->filename) {
            Storage::delete($media->filename);
        }

        // Delete from table
        Media::destroy($media->id);

        // Redirect with message
        return redirect('/spsm/admin/media')->with('success', 'A media has been deleted from the database and directory');
    }

    public function sliderCreate()
    {
        return view('spsm.admin.media.createslider', [
            'title' => 'Create Slider',
            'leadCrumbs' => 'Slider',
            'link' => '/spsm/admin/slider/',
            'statuses' => Status::all(),
        ]);
    }

    public function sliderSave(Request $request)
    {
        // Validate Data
        $validateData = $request->validate([
            'sliderImage' => 'required|image|max:1024',
        ]);

        // Check data
        if ($validateData) {
            $filenamewithextension = $request->file('sliderImage')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('sliderImage')->getClientOriginalExtension();

            //filename to store
            $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

            // Store with filename
            $request->file('sliderImage')->storeAs('public/upload/img', $filenametostore);

            // Save into the database
            $save = new Slider;

            $save->user_id = $request->user()->id;
            $save->filename = $filenametostore;
            $save->link = $request['link'];
            $save->status_id = $request['status'];
            $save->show = $request['show'];
            $save->hide = $request['hide'];
            $save->susunan = $request['susunan'];

            $save->save();

            return redirect('/spsm/admin/slider/list')->with('success', 'Satu slider baharu telah berjaya disimpan.');
        } else {
            return redirect('/spsm/admin/slider/list')->with('error', 'Something went wrong');
        }
    }

    public function sliderList()
    {
        return view('spsm.admin.media.listslider', [
            'title' => 'List of Slider',
            'leadCrumbs' => 'Slider',
            'link' => '/spsm/admin/slider/',
            'sliders' => Slider::with('statuses')->get(),
        ]);
    }

    // public function sliderEdit(Request $request, Slider $slider)
    // {
    //     // Validate Data
    //     $validateData = $request->validate([
    //         'sliderImage' => 'required|image|max:1024',
    //     ]);

    // }

    public function sliderDelete(Request $request)
    {
        // Delete from directory
        if ($request->filename) {
            Storage::delete($request->filename);
        }

        // Delete from table
        if (Slider::destroy($request->id)) {
            return redirect('/spsm/admin/slider/list')->with('success', 'Satu media baharu telah berjaya dipadam.');
        } else {
            return redirect('/spsm/admin/slider/list')->with('error', 'Something went wrong');
        }
    }
}
