<?php

namespace App\Http\Controllers;

use App\Models\KertasKerja;
use App\Models\Status;
use Illuminate\Http\Request;

class KertasKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.kertas_kerja.index', [
            'title' => 'Senarai Kertas Kerja',
            'leadCrumbs' => 'Kertas Kerja',
            'link' => '/spsm/admin/kertas_kerja',
            'kertasKerjas' => KertasKerja::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.kertas_kerja.create', [
            'title' => 'Cipta Kertas Kerja',
            'leadCrumbs' => 'Kertas Kerja',
            'link' => '/spsm/admin/kertas_kerja',
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
            'presentedBy' => 'required',
            'filename' => 'required',
            'date' => 'required',
            'status_id' => 'required',
        ]);

        // Get the filename with extension
        $filenameWithExtension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $filenameExtension = $request->file('filename')->getClientOriginalExtension();

        // Removes all whitespaces and add time
        $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

        // Store the file with its new name
        $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['filename'] = $filenameToStore;

        KertasKerja::create($validateData);

        return redirect('/spsm/admin/kertas_kerja')->with('success', 'Satu laporan tahunan telah berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KertasKerja  $kertasKerja
     * @return \Illuminate\Http\Response
     */
    public function show(KertasKerja $kertasKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KertasKerja  $kertasKerja
     * @return \Illuminate\Http\Response
     */
    public function edit(KertasKerja $kertasKerja)
    {
        return view('spsm.admin.kertas_kerja.edit', [
            'title' => 'Ubah Kertas Kerja',
            'leadCrumbs' => 'Kertas Kerja',
            'link' => '/spsm/admin/kertas_kerja',
            'statuses' => Status::all(),
            'kertasKerja' => $kertasKerja,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KertasKerja  $kertasKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KertasKerja $kertasKerja)
    {
        if ($request['filename'] != '') {
            $validateData = $request->validate([
                'title_my' => 'required',
                'title_en' => 'required',
                'presentedBy' => 'required',
                'filename' => 'required',
                'date' => 'required',
                'status_id' => 'required',
            ]);

            // Get the filename with extension
            $filenameWithExtension = $request->file('filename')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $filenameExtension = $request->file('filename')->getClientOriginalExtension();

            // Removes all whitespaces and add time
            $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

            // Store the file with its new name
            $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename'] = $filenameToStore;

            KertasKerja::where('id', $kertasKerja->id)->update($validateData);

            return redirect('/spsm/admin/kertas_kerja')->with('success', 'Satu laporan tahunan telah berjaya diubah.');
        } else {
            $validateData = $request->validate([
                'title_my' => 'required',
                'title_en' => 'required',
                'presentedBy' => 'required',
                'date' => 'required',
                'status_id' => 'required',
            ]);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename'] = $request['oldFilename'];

            KertasKerja::where('id', $kertasKerja->id)->update($validateData);

            return redirect('/spsm/admin/kertas_kerja')->with('success', 'Satu laporan tahunan telah berjaya diubah.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KertasKerja  $kertasKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(KertasKerja $kertasKerja)
    {
        KertasKerja::destroy($kertasKerja->id);

        return back()->with('success', 'Satu kertas kerja telah dihapuskan');
    }
}
