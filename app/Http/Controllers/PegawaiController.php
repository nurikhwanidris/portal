<?php

namespace App\Http\Controllers;

use App\Models\JabatanUnit;
use App\Models\Pegawai;
use App\Models\Status;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.pegawai.index',[
            'title' => 'Senarai Pegawai',
            'leadCrumbs' => 'Pegawai',
            'link' => '/spsm/admin/piagam',
            'pegawais' => Pegawai::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.pegawai.create',[
            'title' => 'Tambah Pegawai Baru',
            'leadCrumbs' => 'Piagam Pelanggan',
            'link' => '/spsm/admin/piagam',
            'statuses' => Status::all(),
            'jabatans' => JabatanUnit::all(),
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
            'jawatan_my' => 'required',
            'jawatan_en' => 'required',
            'gred_id' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'fax_no' => 'required',
            'photo' => 'required',
            'dept_id' => 'required',
            'sort_order' => 'required',
            // 'status' => 'required',
        ]);

        // Get filename with extension
        $photoNameWithExtension = $request->file('photo')->getClientOriginalName();

        // Get file extension
        $photoName = pathinfo($photoNameWithExtension, PATHINFO_FILENAME);

        // Filter out the extension
        $photoExtension = $request->file('photo')->getClientOriginalExtension();

        // Removes all whitespace and add time
        $photoToStore = str_replace(' ','-',$photoName).'-'.time().'-'.$photoExtension;

        // Store the file
        $request->file('photo')->storeAs('public/upload/img/officer/',$photoToStore);

        $validateData['photo'] = $photoToStore;

        Pegawai::create($validateData);

        return redirect('/spsm/admin/pegawai')->with('success','Seorang pegawai telah berjaya ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
