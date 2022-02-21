<?php

namespace App\Http\Controllers;

use App\Models\LaporanMesyuarat;
use App\Models\Status;
use Illuminate\Http\Request;

class LaporanMesyuaratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.laporan_mesyuarat.index', [
            'title' => 'Senarai Laporan',
            'leadCrumbs' => 'Laporan Mesyuarat',
            'link' => '/spsm/admin/laporan_mesyuarat',
            'laporans' => LaporanMesyuarat::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.laporan_mesyuarat.create', [
            'title' => 'Cipta Laporan',
            'leadCrumbs' => 'Laporan Mesyuarat',
            'link' => '/spsm/admin/laporan_mesyuarat',
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
            'date' => 'required',
            'filename' => 'required',
            'status_id' => 'required',
        ]);

        // Get filename with extension
        $filenameWithExtension = $request->file('filename')->getClientOriginalName();

        // Filter out the extension
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $filenameExtension = $request->file('filename')->getClientOriginalExtension();

        //  Remove all the whitespaces and add time
        $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

        // Store with new file name
        $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['title_my'] = $request['title_my'];
        $validateData['title_en'] = $request['title_en'];
        $validateData['filename'] = $filenameToStore;
        $validateData['date'] = $request['date'];
        $validateData['status_id'] = $request['status_id'];

        LaporanMesyuarat::create($validateData);

        return redirect('/spsm/admin/laporan_mesyuarat')->with('success', 'Satu laporan mesyuarat telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanMesyuarat  $laporanMesyuarat
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanMesyuarat $laporanMesyuarat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanMesyuarat  $laporanMesyuarat
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanMesyuarat $laporanMesyuarat)
    {
        return view('spsm.admin.laporan_mesyuarat.edit', [
            'title' => 'Ubah Laporan',
            'leadCrumbs' => 'Laporan Mesyuarat',
            'link' => '/spsm/admin/laporan_mesyuarat',
            'statuses' => Status::all(),
            'laporan' => $laporanMesyuarat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaporanMesyuarat  $laporanMesyuarat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaporanMesyuarat $laporanMesyuarat)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'date' => 'required',
            // 'filename' => 'required',
            'status_id' => 'required',
        ]);

        if ($request['filename'] != '') {
            // Get filename with extension
            $filenameWithExtension = $request->file('filename')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $filenameExtension = $request->file('filename')->getClientOriginalExtension();

            //  Remove all the whitespaces and add time
            $filenameToStore = str_replace(' ', '-', $filename) . '-' . time() . '.' . $filenameExtension;

            // Store with new file name
            $request->file('filename')->storeAs('public/upload/doc/', $filenameToStore);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['title_my'] = $request['title_my'];
            $validateData['title_en'] = $request['title_en'];
            $validateData['filename'] = $filenameToStore;
            $validateData['date'] = $request['date'];
            $validateData['status_id'] = $request['status_id'];

            LaporanMesyuarat::where('id', $laporanMesyuarat->id)->update($validateData);

            return redirect('/spsm/admin/laporan_mesyuarat')->with('success', 'Satu laporan mesyuarat telah berjaya diubah');
        } else {
            $validateData['user_id'] = auth()->user()->id;
            $validateData['title_my'] = $request['title_my'];
            $validateData['title_en'] = $request['title_en'];
            $validateData['filename'] = $request['oldFilename'];
            $validateData['date'] = $request['date'];
            $validateData['status_id'] = $request['status_id'];

            LaporanMesyuarat::where('id', $laporanMesyuarat->id)->update($validateData);

            return redirect('/spsm/admin/laporan_mesyuarat')->with('success', 'Satu laporan mesyuarat telah berjaya diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanMesyuarat  $laporanMesyuarat
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanMesyuarat $laporanMesyuarat)
    {
        LaporanMesyuarat::destroy($laporanMesyuarat->id);

        return back()->with('success', 'Satu laporan telah berjaya dipadam');
    }
}
