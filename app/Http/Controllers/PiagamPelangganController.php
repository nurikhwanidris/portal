<?php

namespace App\Http\Controllers;

use App\Models\PiagamPelanggan;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;

class PiagamPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.piagam_pelanggan.index', [
            'title' => 'Senarai Piagam Pelanggan',
            'leadCrumbs' => 'Piagam Pelanggan',
            'link' => '/spsm/admin/piagam_pelanggan',
            'piagams' => PiagamPelanggan::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.piagam_pelanggan.create', [
            'title' => 'Cipta Piagam Pelanggan',
            'leadCrumbs' => 'Piagam Pelanggan',
            'link' => '/spsm/admin/piagam_pelanggan',
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
            'filename_my' => 'required',
            'filename_en' => 'required',
            'status_id' => 'required',
        ]);

        // Get the filename with extension
        $filename_myWithExtension = $request->file('filename_my')->getClientOriginalName();
        $filename_enWithExtension = $request->file('filename_en')->getClientOriginalName();

        // Filter out the extension
        $filename_my = pathinfo($filename_myWithExtension, PATHINFO_FILENAME);
        $filename_en = pathinfo($filename_enWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $filename_myExtension = $request->file('filename_my')->getClientOriginalExtension();
        $filename_enExtension = $request->file('filename_en')->getClientOriginalExtension();

        // Removes all whitespaces and add time
        $filename_myToStore = str_replace(' ', '-', $filename_my) . '-' . time() . '.' . $filename_myExtension;
        $filename_enToStore = str_replace(' ', '-', $filename_en) . '-' . time() . '.' . $filename_enExtension;

        // Store the file with its new name
        $request->file('filename_my')->storeAs('public/upload/doc/', $filename_myToStore);
        $request->file('filename_en')->storeAs('public/upload/doc/', $filename_enToStore);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['filename_my'] = $filename_myToStore;
        $validateData['filename_en'] = $filename_enToStore;

        PiagamPelanggan::create($validateData);

        return redirect('/spsm/admin/piagam_pelanggan')->with('success', 'Satu piagam pelanggan telah berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PiagamPelanggan  $piagamPelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(PiagamPelanggan $piagamPelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PiagamPelanggan  $piagamPelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(PiagamPelanggan $piagamPelanggan)
    {
        return view('spsm.admin.piagam_pelanggan.edit', [
            'title' => 'Cipta Piagam Pelanggan',
            'leadCrumbs' => 'Piagam Pelanggan',
            'link' => '/spsm/admin/piagam_pelanggan',
            'piagam' => $piagamPelanggan,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PiagamPelanggan  $piagamPelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PiagamPelanggan $piagamPelanggan)
    {
        if ($request['filename_my'] != '' && $request['filename_en'] != '') {
            $validateData = $request->validate([
                'title_my' => 'required',
                'title_en' => 'required',
                'filename_my' => 'required',
                'filename_en' => 'required',
                'status_id' => 'required',
            ]);

            // Get the filename with extension
            $filename_myWithExtension = $request->file('filename_my')->getClientOriginalName();
            $filename_enWithExtension = $request->file('filename_en')->getClientOriginalName();

            // Filter out the extension
            $filename_my = pathinfo($filename_myWithExtension, PATHINFO_FILENAME);
            $filename_en = pathinfo($filename_enWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $filename_myExtension = $request->file('filename_my')->getClientOriginalExtension();
            $filename_enExtension = $request->file('filename_en')->getClientOriginalExtension();

            // Removes all whitespaces and add time
            $filename_myToStore = str_replace(' ', '-', $filename_my) . '-' . time() . '.' . $filename_enExtension;
            $filename_enToStore = str_replace(' ', '-', $filename_en) . '-' . time() . '.' . $filename_enExtension;

            // Store the file with its new name
            $request->file('filename_my')->storeAs('public/upload/doc/', $filename_myToStore);
            $request->file('filename_en')->storeAs('public/upload/doc/', $filename_enToStore);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename_my'] = $filename_myToStore;
            $validateData['filename_en'] = $filename_enToStore;
        } else {
            $validateData = $request->validate([
                'title_my' => 'required',
                'title_en' => 'required',
                'status_id' => 'required',
            ]);

            $validateData['user_id'] = auth()->user()->id;
            $validateData['filename_my'] = $request['oldFilename_my'];
            $validateData['filename_en'] = $request['oldFilename_en'];
        }

        PiagamPelanggan::where('id', $piagamPelanggan->id)->update($validateData);

        return redirect('/spsm/admin/piagam_pelanggan')->with('success', 'Satu piagam pelanggan telah berjaya disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PiagamPelanggan  $piagamPelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PiagamPelanggan $piagamPelanggan)
    {
        PiagamPelanggan::destroy($piagamPelanggan->id);

        return back()->with('success', 'Satu piagam telah berjaya dipadam.');
    }
}
