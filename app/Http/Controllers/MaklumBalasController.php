<?php

namespace App\Http\Controllers;

use App\Models\MaklumBalas;
use Illuminate\Http\Request;

class MaklumBalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaklumBalas  $maklumBalas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaklumBalas $maklumBalas)
    {
        //
    }

    public function list()
    {
        return view('spsm.admin.maklum_balas.list',[
            'title' => 'Senarai Maklum Balas',
            'leadCrumbs' => 'Maklum Balas',
            'link' => '/spsm/admin/maklum_balas/list',
            'laporans' => MaklumBalas::with('status')->get(),
        ]);
    }
}
