<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index Controller
    public function index()
    {
        return view('spsm.index', [
            'leadCrumbs' => '',
            'title' => 'Dashboard v2',
            'active' => 'active',
        ]);
    }
}
