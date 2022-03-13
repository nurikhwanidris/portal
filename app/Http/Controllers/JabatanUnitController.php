<?php

namespace App\Http\Controllers;

use App\Models\JabatanUnit;
use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class JabatanUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.jabatan.index', [
            'title' => 'Senarai Jabatan & Unit',
            'leadCrumbs' => 'Jabatan & Unit',
            'link' => '/spsm/admin/jabatan/',
            'jabatans' => JabatanUnit::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.jabatan.create', [
            'title' => 'Cipta Jabatan & Unit',
            'leadCrumbs' => 'Jabatan & Unit',
            'link' => '/spsm/admin/jabatan',
            'statuses' => Status::all(),
            'jabatanInduk' => JabatanUnit::where('parent_id' ,'=', 0)->get(),
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
            'name_my' => 'required',
            'name_en' => 'required',
            'parent_id' => 'required',
            'sort_order' => 'required',
            'status' => 'required',
        ]);

        JabatanUnit::create($validateData);

        return redirect('/spsm/admin/pegawai')->with('success', 'Satu jabatan baru telah dimasukkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JabatanUnit  $jabatanUnit
     * @return \Illuminate\Http\Response
     */
    public function show(JabatanUnit $jabatanUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JabatanUnit  $jabatanUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(JabatanUnit $jabatanUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JabatanUnit  $jabatanUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JabatanUnit $jabatanUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JabatanUnit  $jabatanUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(JabatanUnit $jabatanUnit)
    {
        //
    }
}
