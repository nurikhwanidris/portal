<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index Controller
    public function index()
    {
        return view('spsm.index', [
            'title' => 'Dashboard v2'
        ]);
    }
}
