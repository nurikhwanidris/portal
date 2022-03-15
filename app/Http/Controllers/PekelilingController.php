<?php

namespace App\Http\Controllers;

use App\Models\Pekeliling;
use App\Models\Status;
use Illuminate\Http\Request;

class PekelilingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.pekeliling.index',[
            'title' => 'Senarai Pekeliling',
            'leadCrumbs' => 'Pekeliling',
            'link' => '/spsm/admin/pekeliling',
            'pekelilings' => Pekeliling::with('status')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.pekeliling.create',[
            'title' => 'Cipta Pekeliling Baru',
            'leadCrumbs' => 'Cipta Pekeliling',
            'link' => '/spsm/admin/pekeliling/create',
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
            'title_my' => 'required',
            'title_en' => 'required',
            'bilangan' => 'required',
            'oldFile' => 'required',
            'jenisPekeliling' => 'required',
            'status_id' => 'required',
        ]);

        // Get filename with extension
        $filenameWithExtension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $extension = $request->file('filename')->getClientOriginalExtension();

        // Removes all whitespace and add time()
        $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

        // Store with new filename
        $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

        $validateData['user_id'] = auth()->user()->id;

        Pekeliling::create($validateData);

        return redirect('/spsm/admin/pekeliling')->with('success', 'Satu pekeliling baru telah disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pekeliling  $pekeliling
     * @return \Illuminate\Http\Response
     */
    public function show(Pekeliling $pekeliling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pekeliling  $pekeliling
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekeliling $pekeliling)
    {
        return view('spsm.admin.pekeliling.edit',[
            'title' => 'Ubah Pekeliling',
            'leadCrumbs' => 'Ubah Pekeliling',
            'link' => '/spsm/admin/pekeliling/edit',
            'statuses' => Status::all(),
            'pekeliling' => $pekeliling,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pekeliling  $pekeliling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekeliling $pekeliling)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'bilangan' => 'required',
            'jenisPekeliling' => 'required',
            'status_id' => 'required',
        ]);

        if ($request->file('filename') != '') {
            // Get filename with extension
            $filenameWithExtension = $request->file('filename')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $extension = $request->file('filename')->getClientOriginalExtension();

            // Removes all whitespace and add time()
            $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $extension;

            // Store with new filename
            $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

            $validateData['filename'] = $filenameToStore;
        } else {
            $validateData['filename'] = $request['oldFile'];
        }

        $validateData['user_id'] = auth()->user()->id;

        Pekeliling::where('id', $pekeliling->id)->update($validateData);

        return redirect('/spsm/admin/pekeliling')->with('success', 'Satu pekeliling baru telah disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pekeliling  $pekeliling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekeliling $pekeliling)
    {
        Pekeliling::destroy($pekeliling->id);

        return back()->with('success', 'Satu pekeliling telah berjaya dipadam');
    }
}
