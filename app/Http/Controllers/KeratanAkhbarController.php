<?php

namespace App\Http\Controllers;

use App\Models\KeratanAkhbar;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeratanAkhbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.newspaper.index', [
            'title' => 'Senarai Keratan Akbar',
            'leadCrumbs' => 'Keratan Akhbar',
            'link' => '/spsm/admin/newspaper',
            'keratanAkhbars' => KeratanAkhbar::with('status')->orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.newspaper.create', [
            'title' => 'Muat Naik Keratan Akbar',
            'leadCrumbs' => 'Keratan Akbar',
            'link' => '/spsm/admin/newspaper/create',
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'filename' => 'required|image|max:1024',
            'tajukKeratanAkhbar' => 'required',
            'sumberKeratanAkhbar' => 'required',
            'tarikhTerbitanAkhbar' => 'required',
            'status_id' => 'required',
        ]);

        if ($validateData) {

            // Get filename with extension
            $filenamewithextension = $request->file('filename')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            // Filter out the filename
            $extension = $request->file('filename')->getClientOriginalExtension();

            // Remove all white spaces
            $filenametostore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

            // Store with filename
            $request->file('filename')->storeAs('public/upload/img', $filenametostore);

            // Save inside the database
            $save = new KeratanAkhbar;

            $save->user_id = auth()->user()->id;
            $save->filename = $filenametostore;
            $save->tajukKeratanAkhbar = $validateData['tajukKeratanAkhbar'];
            $save->sumberKeratanAkhbar = $validateData['sumberKeratanAkhbar'];
            $save->tarikhTerbitanAkhbar = $validateData['tarikhTerbitanAkhbar'];
            $save->status_id = $validateData['status_id'];

            $save->save();

            // Relay the success message
            return redirect('/spsm/admin/newspaper/create')->with('success', 'Satu Keratan Akhbar telah berjaya ditambah');
        } else {
            // Relay the error message
            return redirect('/spsm/admin/newspaper/create')->with('error', 'An error has occurred');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function show(KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function edit(KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeratanAkhbar $keratanAkhbar)
    {
        // Delete file from storage
        if ($keratanAkhbar->filename) {
            Storage::delete('public/upload/img/' . $keratanAkhbar->filename);
        } else {
            return redirect('/spsm/admin/newspaper')->with('error', 'Couldn\'t delete the file');
        }

        // Delete row from table
        if (KeratanAkhbar::destroy($keratanAkhbar->id)) {
            return redirect('/spsm/admin/newspaper/')->with('success', 'Satu keratan akhbar telah berjaya dipadam');
        } else {
            return redirect('/spsm/admin/newspaper/')->with('error', 'Something went wrong');
        }
    }
}
