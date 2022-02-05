<?php

namespace App\Http\Controllers;

use App\Models\KeratanAkhbar;
use App\Models\Status;
use Illuminate\Http\Request;

class KeratanAkhbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('spsm.admin.newspaper.index', [
            'title' => 'Senarai Keratan Akbar',
            'leadCrumbs' => 'Keratan Akhbar',
            'link' => '/spsm/admin/newspaper',
            'newsArticles' => KeratanAkhbar::with('status')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spsm.admin.newspaper.create', [
            'title' => 'Muat Naik Keratan Akbar',
            'leadCrumbs' => 'Keratan Akbar',
            'link' => '/spsm/admin/newspaper/create',
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
            'keratanAkhbar' => 'required|image|max:1024',
            'tajukKeratanAkhbar' => 'required',
            'sumberKeratanAkhbar' => 'required',
            'tarikhTerbitanAkhbar' => 'required',
            'status_id' => 'required',
        ]);

        if ($validateData) {
            $validateData['keratanAkhbar'] = $request->file('keratanAkhbar')->store('public/upload/img');

            $validateData['user_id'] = auth()->user()->id;

            KeratanAkhbar::create($validateData);

            return redirect('/spsm/admin/newspaper/create')->with('success', 'Satu Keratan Akhbar telah berjaya ditambah');
        } else {
            return redirect('/spsm/admin/newspaper/create')->with('error', 'An error has occurred');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function show(KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function edit(KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeratanAkhbar $keratanAkhbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeratanAkhbar  $keratanAkhbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeratanAkhbar $keratanAkhbar)
    {
        //
    }
}
