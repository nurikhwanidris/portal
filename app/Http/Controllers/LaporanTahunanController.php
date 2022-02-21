<?php

namespace App\Http\Controllers;

use App\Models\LaporanTahunan;
use App\Models\Status;
use Illuminate\Http\Request;

class LaporanTahunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.laporan_tahunan.index', [
            'title' => 'Senarai Laporan',
            'leadCrumbs' => 'Laporan',
            'link' => '/spsm/admin/laporan_tahunan',
            'laporans' => LaporanTahunan::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.laporan_tahunan.create', [
            'title' => 'Cipta Laporan',
            'leadCrumbs' => 'Laporan',
            'link' => '/spsm/admin/laporan_tahunan',
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
            'gambar' => 'required',
            'filename' => 'required',
            'status_id' => 'required',
        ]);

        // get filename with extension
        $gambarWithExtension = $request->file('gambar')->getClientOriginalName();
        $filenameWithExtension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $gambarExtension = $request->file('gambar')->getClientOriginalExtension();
        $filenameExtension = $request->file('filename')->getClientOriginalExtension();

        // Remove all whitespaces and add time
        $gambarToStore = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;
        $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

        // Store with new file name
        $request->file('gambar')->storeAs('public/upload/img/', $gambarToStore);
        $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['title_my'] = $request['title_my'];
        $validateData['title_en'] = $request['title_en'];
        $validateData['year'] = $request['year'];
        $validateData['gambar'] = $gambarToStore;
        $validateData['filename'] = $filenameToStore;
        $validateData['status_id'] = $request['status_id'];

        LaporanTahunan::create($validateData);

        return redirect('/spsm/admin/laporan_tahunan')->with('success', 'Satu laporan tahunan telah berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanTahunan  $laporanTahunan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanTahunan $laporanTahunan)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanTahunan  $laporanTahunan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanTahunan $laporanTahunan)
    {
        return view('spsm.admin.laporan_tahunan.edit', [
            'title' => 'Ubah Laporan',
            'leadCrumbs' => 'Laporan',
            'link' => '/spsm/admin/laporan_tahunan',
            'laporan' => $laporanTahunan,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanTahunan  $laporanTahunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanTahunan $laporanTahunan)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'year' => 'required',
            'gambar' => 'required',
            'filename' => 'required',
            'status_id' => 'required',
        ]);

        // get filename with extension
        $gambarWithExtension = $request->file('gambar')->getClientOriginalName();
        $filenameWithExtension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $gambarExtension = $request->file('gambar')->getClientOriginalExtension();
        $filenameExtension = $request->file('filename')->getClientOriginalExtension();

        // Remove all whitespaces and add time
        $gambarToStore = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;
        $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

        // Store with new file name
        $request->file('gambar')->storeAs('public/upload/img/', $gambarToStore);
        $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['title_my'] = $request['title_my'];
        $validateData['title_en'] = $request['title_en'];
        $validateData['year'] = $request['year'];
        $validateData['gambar'] = $gambarToStore;
        $validateData['filename'] = $filenameToStore;
        $validateData['status_id'] = $request['status_id'];

        LaporanTahunan::where('id', $laporanTahunan->id)->update($validateData);

        return redirect('/spsm/admin/laporan_tahunan')->with('success', 'Satu laporan tahunan telah berjaya diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanTahunan  $laporanTahunan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanTahunan $laporanTahunan)
    {
        LaporanTahunan::destroy($laporanTahunan->id);

        return redirect('/spsm/admin/laporan_tahunan')->with('success', 'Satu laporan telah berjaya dipadam');
    }
}
