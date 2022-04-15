<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Slider;
use App\Models\Status;
use App\Http\Requests\StoreMediaRequest;
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
        $request->validate([
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
        $path = '/upload/img/';

        $save = new Media;

        $save->user_id = $request->user()->id;
        $save->filename = $filenametostore;
        $save->path = $path . $filenametostore;

        $save->save();

        return redirect('/spsm/admin/media')->with('success', 'Satu media baharu telah berjaya disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        // // Delete from directory
        // if ($media->filename) {
        //     Storage::delete($media->filename);
        // }

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
            'sliderImage' => 'required|image|max:1024|dimensions:width=1400,height=300',
            'hide' => 'required',
            'status' => 'required',
            'susunan' => 'required'
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

            $save->user_id = auth()->user()->id;
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

    public function sliderEdit(Slider $slider)
    {
        return view('spsm.admin.media.editslider', [
            'title' => 'Edit Slider',
            'leadCrumbs' => 'Slider',
            'link' => '/spsm/admin/slider/',
            'slider' => $slider,
            'statuses' => Status::all(),
        ]);
    }

    public function sliderUpdate(Request $request, Slider $slider)
    {

        if ($request['sliderImage'] != '') {

            // Validate the file first
            $request->validate(['sliderImage' => 'required|image|max:1024|dimensions:width=1400,height=300']);

            // Delete old file first
            if ($request->file('sliderImage')) {
                Storage::delete('/public/upload/img/' . $request->oldImage);
            } else {
                $validateData['sliderImage'] = $request->file('sliderImage');
            }

            // Get the filename
            $filenamewithextension = $request->file('sliderImage')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('sliderImage')->getClientOriginalExtension();

            //filename to store
            $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

            // Store with filename
            $request->file('sliderImage')->storeAs('public/upload/img', $filenametostore);

            // Save it in an array
            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename'] = $filenametostore;
            $validateData['link'] = $request['link'];
            $validateData['status_id'] = $request['status'];
            $validateData['show'] = $request['show'];
            $validateData['hide'] = $request['hide'];
            $validateData['susunan'] = $request['susunan'];

            Slider::where('id', $slider->id)->update($validateData);

            return redirect('/spsm/admin/slider/view/' . $slider->id)->with('success', 'Satu slider baharu telah berjaya disimpan.');
        } else {
            // Save it in an array
            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename'] = $request['oldImage'];
            $validateData['link'] = $request['link'];
            $validateData['status_id'] = $request['status'];
            $validateData['show'] = $request['show'];
            $validateData['hide'] = $request['hide'];
            $validateData['susunan'] = $request['susunan'];

            Slider::where('id', $slider->id)->update($validateData);

            return redirect('/spsm/admin/slider/view/' . $slider->id)->with('success', 'Satu slider baharu telah berjaya disimpan.');
        }
    }

    public function sliderDelete(Slider $slider)
    {
        // Delete from directory
        if ($slider->filename) {
            Storage::delete('/public/upload/img/' . $slider->filename);
        } else {
            return redirect('/spsm/admin/slider/list')->with('error', 'Couldn\'t delete the image');
        }

        // Delete from table
        if (Slider::destroy($slider->id)) {
            return redirect('/spsm/admin/slider/list')->with('success', 'Satu media baharu telah berjaya dipadam.');
        } else {
            return redirect('/spsm/admin/slider/list')->with('error', 'Something went wrong');
        }
    }
}
