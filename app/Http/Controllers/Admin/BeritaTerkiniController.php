<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BeritaTerkini;
use App\Models\Status;
use Illuminate\Http\Request;

class BeritaTerkiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.berita_terkini.index', [
            'title' => 'Senarai Berita Terkini',
            'leadCrumbs' => 'Berita Terkini',
            'link' => '/spsm/admin/berita_terkini',
            'currentNews' => BeritaTerkini::with('status')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.berita_terkini.create', [
            'title' => 'Cipta Berita',
            'leadCrumbs' => 'Cipta Berita Terkini',
            'link' => '/spsm/admin/berita_terkini',
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
            'excerpt_my' => 'required',
            'content_my' => 'required',
            'status_id' => 'required',
        ]);

        // Get the real filename
        $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

        // Filter out the extension
        $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

         // Filter out the filename
        $gambarExtension = $request->file('gambarHadapan')->getClientOriginalExtension();

        // Remove all white spaces
        $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' .$gambarExtension;

        // Store the filename
        $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;
        $validateData['title_en'] = $request['title_en'];
        $validateData['excerpt_en'] = $request['excerpt_en'];
        $validateData['content_en'] = $request['content_en'];
        $validateData['gambarHadapan'] = $gambarName;

        BeritaTerkini::create($validateData);


        return redirect('/spsm/admin/berita_terkini')->with('success', 'Satu berita telah berjaya disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BeritaTerkini  $beritaTerkini
     * @return \Illuminate\Http\Response
     */
    public function show(BeritaTerkini $beritaTerkini)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BeritaTerkini  $beritaTerkini
     * @return \Illuminate\Http\Response
     */
    public function edit(BeritaTerkini $beritaTerkini)
    {
        return view('spsm.admin.berita_terkini.edit',[
            'title' => 'Ubah Berita Terkini',
            'leadCrumbs' => 'Ubah Berita Terkini',
            'link' => '/spsm/admin/berita_terkini',
            'beritaTerkini' => $beritaTerkini,
            'statuses' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BeritaTerkini  $beritaTerkini
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BeritaTerkini $beritaTerkini)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'excerpt_my' => 'required',
            'content_my' => 'required',
            'status_id' => 'required',
        ]);

        if ($request->file('gambarHadapan') !== '') {
            // Get the real filename
            $gambarWithExtension = $request->file('gambarHadapan')->getClientOriginalName();

            // Filter out the extension
            $gambar = pathinfo($gambarWithExtension, PATHINFO_FILENAME);

            // Filter out the filename
            $gambarExtension = $request->file('gambarHadapan')->getClientOriginalExtension();

            // Remove all white spaces
            $gambarName = str_replace(' ', '-', $gambar) . '-' . time() . '.' . $gambarExtension;

            // Store the filename
            $request->file('gambarHadapan')->storeAs('public/upload/img/', $gambarName);

            // Insert inside the database
            $validateData['gambarHadapan'] = $gambarName;
        } else {
            $validateData['gambarHadapan'] = $request['gambarOld'];
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;
        $validateData['title_en'] = $request['title_en'];
        $validateData['excerpt_en'] = $request['excerpt_en'];
        $validateData['content_en'] = $request['content_en'];

        BeritaTerkini::where('id', $beritaTerkini->id)->update($validateData);


        return redirect('/spsm/admin/berita_terkini')->with('success', 'Satu berita telah berjaya diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BeritaTerkini  $beritaTerkini
     * @return \Illuminate\Http\Response
     */
    public function destroy(BeritaTerkini $beritaTerkini)
    {
        BeritaTerkini::destroy($beritaTerkini->id);

        return redirect('/spsm/admin/berita_terkini')->with('success', 'Satu berita telah berjaya dipadam');
    }
}
