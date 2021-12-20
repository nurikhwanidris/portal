<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //Index controller
    public function index()
    {
        return view('spsm.application.index');
    }
}
