<?php

namespace App\Http\Controllers;

use App\Models\JabatanUnit;
use Illuminate\Http\Request;
use App\Models\Status;

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
            'namaJabatan' => 'required',
            'departmentName' => 'required',
            'parentId' => 'required',
            'sortOrder' => 'required',
            'status_id' => 'required',
        ]);
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
