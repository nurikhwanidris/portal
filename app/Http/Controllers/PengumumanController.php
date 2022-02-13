<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\Status;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.annoucement.index', [
            'title' => 'Senarai Pengumuman',
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
            'annoucements' => Pengumuman::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.annoucement.create', [
            'title' => 'Cipta Pengumuman Baru',
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
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
            'tajukPengumuman' => 'required',
            'isiPengumuman' => 'required',
            'status_id' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['paparanMula'] = $request->paparanMula;
        $validateData['paparanTamat'] = $request->paparanTamat;

        Pengumuman::create($validateData);

        return redirect('/spsm/admin/pengumuman')->with('success', 'Satu pengumuman telah berjaya disimpan dan akan mula dipaparkan pada ' . '<b>' . $validateData['paparanMula'] . '</b>.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        return view('spsm.admin.annoucement.show', [
            'title' => $pengumuman->tajukPengumuman,
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('spsm.admin.annoucement.edit', [
            'title' => $pengumuman->tajukPengumuman,
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
    }
}
