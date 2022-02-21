<?php

namespace App\Http\Controllers;

use App\Models\BuletinGis;
use App\Models\Status;
use Illuminate\Http\Request;

class BuletinGisController extends Controller
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
            'bulletins' => BuletinGis::with('status')->get(),
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

        BuletinGis::create($validateData);

        return redirect('/spsm/admin/buletin_gis')->with('success', 'Satu buletin telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuletinGis  $buletinGis
     * @return \Illuminate\Http\Response
     */
    public function show(BuletinGis $buletinGis)
    {
        return redirect('/upload/doc/' . $buletinGis->filename);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuletinGis  $buletinGis
     * @return \Illuminate\Http\Response
     */
    public function edit(BuletinGis $buletinGis)
    {
        return view('spsm.admin.gis.edit', [
            'title' => 'asd',
            'leadCrumbs' => 'Buletin GIS',
            'link' => '/spsm/admin/gis',
            'buletinGis' => $buletinGis,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuletinGis  $buletinGis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuletinGis $buletinGis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuletinGis  $buletinGis
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuletinGis $buletinGis)
    {
        BuletinGis::destroy($buletinGis->id);

        return redirect('/spsm/admin/buletin_gis')->with('success', 'Satu buletin telah berjaya dipadam');
    }
}
