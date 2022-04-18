<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use App\Models\Quote;
use Carbon\Carbon;

class MainController extends Controller
{
    // Index controller
    public function index()
    {
        return view('main.index');
    }

    // Info Korporat controller
    public function infoKorp()
    {
        return view('main.pages.info-korp');
    }

    // Orang Awam controller
    public function orangAwam()
    {
        return view('main.pages.orang-awam');
    }

}

