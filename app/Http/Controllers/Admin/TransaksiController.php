<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\TransaksiCategory;
use App\Models\Status;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.transaksi.index', [
            'title' => 'Senarai Transaksi',
            'leadCrumbs' => 'Transaksi',
            'link' => '/spsm/admin/transaksi',
            'transaksis' => Transaksi::with('status')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.transaksi.create', [
            'title' => 'Cipta Transaksi',
            'leadCrumbs' => 'Cipta Transaksi',
            'link' => '/spsm/admin/transaksi',
            'statuses' => Status::all(),
            'products' => TransaksiCategory::all(),
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
            'status_id' => 'required',
            'product_id' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['year'] = $request->year;
        $validateData['january'] = $request->january;
        $validateData['february'] = $request->february;
        $validateData['march'] = $request->march;
        $validateData['april'] = $request->april;
        $validateData['may'] = $request->may;
        $validateData['june'] = $request->june;
        $validateData['july'] = $request->july;
        $validateData['august'] = $request->august;
        $validateData['september'] = $request->september;
        $validateData['october'] = $request->october;
        $validateData['november'] = $request->november;
        $validateData['december'] = $request->december;

        Transaksi::create($validateData);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berjaya ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
         return view('spsm.admin.transaksi.edit',[
            'title' => 'Ubah Transaksi',
            'leadCrumbs' => 'Ubah Transaksi',
            'link' => '/spsm/admin/transaksi',
            'transaksi' => $transaksi,
            'statuses' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validateData = $request->validate([
            'title_my' => 'required',
            'title_en' => 'required',
            'status_id' => 'required',
            'product_id' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['year'] = $request->year;
        $validateData['january'] = $request->january;
        $validateData['february'] = $request->february;
        $validateData['march'] = $request->march;
        $validateData['april'] = $request->april;
        $validateData['may'] = $request->may;
        $validateData['june'] = $request->june;
        $validateData['july'] = $request->july;
        $validateData['august'] = $request->august;
        $validateData['september'] = $request->september;
        $validateData['october'] = $request->october;
        $validateData['november'] = $request->november;
        $validateData['december'] = $request->december;

        Transaksi::where('id', $transaksi->id)->update($validateData);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berjaya dikemaskini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berjaya dihapuskan');
    }
}
