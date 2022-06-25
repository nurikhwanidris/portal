<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'annoucements' => Pengumuman::with('status')->orderBy('created_at', 'desc')->get(),
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
            'title_my' => 'required',
            'content_my' => 'required',
            'status_id' => 'required',
        ]);

        // Get filename with extension
        $fileWithExtension = $request->file('filename_my')->getClientOriginalName();

        // Filter out the extension
        $filename = pathinfo($fileWithExtension, PATHINFO_FILENAME);

        // Filter out the filename
        $fileExtension = $request->file('filename_my')->getClientOriginalExtension();

        // Remove all white spaces
        $fileName = str_replace(' ', '-', $filename) . '-' . time() . '.' . $fileExtension;

        // Store with filename
        $request->file('filename_my')->storeAs('public/upload/pengumuman/', $fileName);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['title_en'] = $request->title_en;
        $validateData['content_en'] = $request->content_en;
        $validateData['filename_my'] = $fileName;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;

        Pengumuman::create($validateData);

        return redirect('/spsm/admin/pengumuman')->with('success', 'Satu pengumuman telah berjaya disimpan dan akan mula dipaparkan pada ' . '<b>' . $validateData['show'] . '</b>.');
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
            'title' => 'Pengumuman',
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
            'annoucement' => $pengumuman,
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
            'title' => $pengumuman->title_my,
            'leadCrumbs' => 'Pengumuman',
            'link' => '/spsm/admin/pengumuman',
            'annoucement' => $pengumuman,
            'statuses' => Status::all(),
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
        $validateData = $request->validate([
            'title_my' => 'required',
            'content_my' => 'required',
            'status_id' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['show'] = $request->show;
        $validateData['hide'] = $request->hide;

        Pengumuman::where('id', $pengumuman->id)->update($validateData);

        return redirect('/spsm/admin/pengumuman/' . $pengumuman->id . '/edit')->with('success', 'Satu pengumuman telah berjaya disimpan dan akan mula dipaparkan pada '  . $validateData['show']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        Pengumuman::destroy($pengumuman->id);

        return redirect('/spsm/admin/pengumuman')->with('success', 'Satu pengumuman telah berjaya dipadam');
    }
}
