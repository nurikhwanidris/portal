<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        // Validate data
        $validateData = $request->validate([
            'name_my'=> 'required',
            'name_en'=> 'required',
            'jawatan_my'=> 'required',
            'jawatan_en'=> 'required',
            'gred_id'=> 'required',
            'email'=> 'required',
            'phone_no'=> 'required',
            'dept_id'=> 'required',
            'sort_order'=> 'required',
            'status_id'=> 'required',
        ]);

        if ($request->file('photo')) {
            // Get filename with extension
            $filenameWithExtension = $request->file('photo')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenameWithExtension,PATHINFO_FILENAME);

            // Filter out the filename only
            $filenameExtension = $request->file('photo')->getClientOriginalExtension();

            $filenameTostore = str_replace(' ', '-', $filename). '-' . time() . '.' . $filenameExtension;

            // Store the file with its new name
            $request->file('photo')->storeAs('public/upload/img/pegawai/',$filenameTostore);

            $validateData['photo'] = $filenameTostore;
        }

        Pegawai::create($validateData);

        return redirect('/spsm/admin/pegawai')->with('success','Data seorang pegawai telah berjaya ditambah');
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
        return view('spsm.admin.pegawai.edit',[
            'title' => 'Ubah Info Pegawai',
            'leadCrumbs' => 'Piagam Pelanggan',
            'link' => '/spsm/admin/piagam',
            'statuses' => Status::all(),
            'jabatans' => JabatanUnit::all(),
            'pegawai' => $pegawai,
        ]);
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
        // Validate data
        $validateData = $request->validate([
            'name_my'=> 'required',
            'name_en'=> 'required',
            'jawatan_my'=> 'required',
            'jawatan_en'=> 'required',
            'gred_id'=> 'required',
            'email'=> 'required',
            'phone_no'=> 'required',
            'dept_id'=> 'required',
            'sort_order'=> 'required',
            'status_id'=> 'required',
        ]);

        if ($request->file('photo')) {
            // Get filename with extension
            $filenameWithExtension = $request->file('photo')->getClientOriginalName();

            // Filter out the extension
            $filename = pathinfo($filenameWithExtension,PATHINFO_FILENAME);

            // Filter out the filename only
            $filenameExtension = $request->file('photo')->getClientOriginalExtension();

            $filenameTostore = str_replace(' ', '-', $filename). '-' . time() . '.' . $filenameExtension;

            // Store the file with its new name
            $request->file('photo')->storeAs('public/upload/img/pegawai/',$filenameTostore);

            $validateData['photo'] = $filenameTostore;
        }

        Pegawai::where('id', $pegawai->id)->update($validateData);

        return redirect('/spsm/admin/pegawai')->with('success','Data seorang pegawai telah berjaya diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);

        return back()->with('success', 'Satu info pegawai telah berjaya dipadamkan dari database.');
    }
}
