<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerolehanBerjaya as PerolehanBerjayaModel;
use App\Models\Status;

class PerolehanBerjaya extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.perolehan_berjaya.index', [
            'title' => 'Senarai Perolehan Berjaya',
            'leadCrumbs' => 'Perolehan Berjaya',
            'link' => '/spsm/admin/perolehan_berjaya',
            'perolehanBerjayas' => PerolehanBerjayaModel::with('user', 'status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.perolehan_berjaya.create', [
            'title' => 'Cipta Perolehan Berjaya',
            'leadCrumbs' => 'Perolehan Berjaya',
            'link' => '/spsm/admin/perolehan_berjaya',
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
            'jenis_perolehan' => 'required',
            'siri_perolehan' => 'required',
            'tajuk_perolehan' => 'required',
            'nama_syarikat' => 'required',
            'nilai_perolehan' => 'required',
            'status_id' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        PerolehanBerjayaModel::create($validateData);

        return redirect()->route('perolehan_berjaya.index')->with('success', 'Perolehan Berjaya berjaya dicipta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
