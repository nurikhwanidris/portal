<?php

namespace App\Http\Controllers;

use App\Models\BeritaUkur;
use App\Models\Status;
use Illuminate\Http\Request;

class BeritaUkurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.berita_ukur.index', [
            'title' => 'Senarai Berita',
            'leadCrumbs' => 'Berita Ukur',
            'link' => '/spsm/admin/berita_ukur',
            'beritas' => BeritaUkur::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.berita_ukur.create', [
            'title' => 'Cipta Berita',
            'leadCrumbs' => 'Cipta Berita Ukur',
            'link' => '/spsm/admin/berita_ukur',
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
            'gambarHadapan' => 'required',
            'filename' => 'required',
            'status_id' => 'required',
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
        $validateData['title_my'] = $request['title_my'];
        $validateData['title_en'] = $request['title_en'];
        $validateData['year'] = $request['year'];
        $validateData['status_id'] = $request['status_id'];
        $validateData['gambarHadapan'] = $gambarName;
        $validateData['filename'] = $pdfName;

        BeritaUkur::create($validateData);

        return redirect('/spsm/admin/berita_ukur')->with('success', 'Satu berita telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaUkur  $beritaUkur
     * @return \Illuminate\Http\Response
     */
    public function show(BeritaUkur $beritaUkur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaUkur  $beritaUkur
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaUkur $beritaUkur)
    {
        return view('spsm.admin.berita_ukur.edit', [
            'title' => 'Ubah Berita',
            'leadCrumbs' => 'Ubah Berita Ukur',
            'link' => '/spsm/admin/berita_ukur',
            'berita' => $beritaUkur,
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaUkur  $beritaUkur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaUkur $beritaUkur)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'year' => 'required',
            'status_id' => 'required',
        ]);

        if ($request['gambarHadapan'] != '' || $request['filename'] != '') {
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
            $validateData['title_my'] = $request['title_my'];
            $validateData['title_en'] = $request['title_en'];
            $validateData['year'] = $request['year'];
            $validateData['status_id'] = $request['status_id'];
            $validateData['gambarHadapan'] = $gambarName;
            $validateData['filename'] = $pdfName;

            BeritaUkur::where('id', $beritaUkur->id)->update($validateData);

            return redirect('/spsm/admin/berita_ukur')->with('success', 'Satu berita telah berjaya diubah');
        } else {
            $validateData['user_id'] = auth()->user()->id;
            $validateData['title_my'] = $request['title_my'];
            $validateData['title_en'] = $request['title_en'];
            $validateData['year'] = $request['year'];
            $validateData['status_id'] = $request['status_id'];
            $validateData['gambarHadapan'] = $request['oldGambarHadapan'];
            $validateData['filename'] = $request['oldFilename'];

            BeritaUkur::where('id', $beritaUkur->id)->update($validateData);

            return redirect('/spsm/admin/berita_ukur')->with('success', 'Satu berita telah berjaya diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaUkur  $beritaUkur
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaUkur $beritaUkur)
    {
        BeritaUkur::destroy($beritaUkur->id);

        return back()->with('success', 'Satu berita telah berjaya dipadam');
    }
}
