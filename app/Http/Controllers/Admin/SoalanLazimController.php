<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SoalanLazim;
use App\Models\SoalanLazimCategory;
use App\Models\Status;
use Illuminate\Http\Request;

class SoalanLazimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Index
        return view('spsm.admin.soalan_lazim.index', [
            'title' => 'Soalan Lazim',
            'leadCrumbs' => 'Soalan Lazim',
            'link' => '/admin/soalan_lazim',
            'soalanLazim' => SoalanLazim::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create
        return view('spsm.admin.soalan_lazim.create', [
            'title' => 'Senarai Soalan Lazim',
            'leadCrumbs' => 'Soalan Lazim',
            'link' => '/admin/soalan_lazim',
            'statuses' => Status::all(),
            'categories' => SoalanLazimCategory::all(),
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
        // Store
        $validateData = $request->validate([
            'soalan_my' => 'required',
            'soalan_en' => 'required',
            'jawapan_my' => 'required',
            'jawapan_en' => 'required',
            'status_id' => 'required',
            'category_id' => 'required',
        ]);

        // User ID
        $validateData['user_id'] = auth()->user()->id;

        // Create
        SoalanLazim::create($validateData);

        // Redirect if success
        return redirect()->route('soalan_lazim.index')->with('success', 'Soalan Lazim telah berjaya ditambah.');
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
        // Edit
        return view('spsm.admin.soalan_lazim.edit', [
            'title' => 'Kemaskini Soalan Lazim',
            'leadCrumbs' => 'Soalan Lazim',
            'link' => '/admin/soalan_lazim',
            'soalanLazim' => SoalanLazim::find($id),
            'statuses' => Status::all(),
            'categories' => SoalanLazimCategory::all(),
        ]);
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
        // Update data
        $validateData = $request->validate([
            'soalan_my' => 'required',
            'soalan_en' => 'required',
            'jawapan_my' => 'required',
            'jawapan_en' => 'required',
            // 'status_id' => 'required',
            // 'category_id' => 'required',
        ]);

        SoalanLazim::where('id', $id)->update($validateData);

        return redirect()->route('soalan_lazim.index')->with('success', 'Soalan Lazim telah berjaya dikemaskini.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete
        SoalanLazim::find($id)->delete();

        return redirect()->route('soalan_lazim.index')->with('success', 'Soalan Lazim telah berjaya dihapuskan.');
    }

    // Soalan Lazim Kategori
    public function soalanLazimCategory()
    {
        return view('spsm.admin.soalan_lazim.category', [
            'title' => 'Senarai Kategori Soalan Lazim',
            'leadCrumbs' => 'Kategori Soalan Lazim',
            'link' => '/admin/soalan_lazim',
            'statuses' => Status::all(),
        ]);
    }
}
