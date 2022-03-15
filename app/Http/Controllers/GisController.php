<?php

namespace App\Http\Controllers;

use App\Models\Gis;
use App\Models\Status;
use Illuminate\Http\Request;

class GisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('spsm.admin.gis.index', [
            'title' => 'Senarai Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'bulletins' => Gis::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.gis.create', [
            'title' => 'Cipta Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
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
            'year' => 'required',
            'status_id' => 'required',
            'gambarHadapan' => 'required',
            'filename' => 'required',
        ]);

        // Get filename with extension
        $pdfWithExtension = $request->file('filename')->getClientOriginalName();
        $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

        // Filter out the extension
        $pdf = pathinfo($pdfWithExtension, PATHINFO_FILENAME);
        $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $pdfExtension = $request->file('filename')->getClientOriginalExtension();
        $gambarExtension = $request->file('gambarHadapan')->getClientOriginalExtension();

        // Remove all white spaces
        $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;
        $pdfName = str_replace(' ', '-', $pdf) . '-' . time() . '.' . $pdfExtension;

        // Store with filename
        $request->file('filename')->storeAs('public/upload/doc/', $pdfName);
        $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['gambarHadapan'] = $gambarName;
        $validateData['filename'] = $pdfName;

        Gis::create($validateData);

        return redirect('/spsm/admin/gis')->with('success', 'Satu buletin telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gis  $gis
     * @return \Illuminate\Http\Response
     */
    public function show(Gis $gis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gis  $gis
     * @return \Illuminate\Http\Response
     */
    public function edit(Gis $gis)
    {
        return view('spsm.admin.gis.edit', [
            'title' => 'Ubah Buletin GIS',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'gis' => $gis,
            'statuses' => Status::all(),
        ]);
    }

    // Testing shit
    public function test(Gis $gis)
    {
        return view('spsm.admin.test.edit',[
            'title' => 'some shit',
            'leadCrumbs' => 'Ntah',
            'gis' => $gis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gis  $gis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gis $gis)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'year' => 'required',
            'status_id' => 'required',
        ]);

        if ($request->file('filename') != '') {
            // Get filename with extension
            $pdfWithExtension = $request->file('filename')->getClientOriginalName();
            $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

            // Filter out the extension
            $pdf = pathinfo($pdfWithExtension, PATHINFO_FILENAME);
            $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $pdfExtension = $request->file('filename')->getClientOriginalExtension();
            $gambarExtension = $request->file('gambarHadapan')->getClientOriginalExtension();

            // Remove all white spaces
            $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;
            $pdfName = str_replace(' ', '-', $pdf) . '-' . time() . '.' . $pdfExtension;

            // Store with filename
            $request->file('filename')->storeAs('public/upload/doc/', $pdfName);
            $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

            $validateData['filename'] = $pdfName;
            $validateData['gambarHadapan'] = $gambarName;
        } else {
            $validateData['filename'] = $request['oldFile'];
            $validateData['oldGambar'] = $request['oldGambar'];
        }
        $validateData['user_id'] = auth()->user()->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gis  $gis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gis $gis)
    {
        Gis::destroy($gis->id);

        return redirect('/spsm/admin/gis')->with('success', 'Satu buletin telah berjaya dipadam');
    }
}
