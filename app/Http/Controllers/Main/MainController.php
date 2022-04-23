<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // Index controller
    public function index()
    {
        return view('main.index',[
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Info Korporat controller
    public function infoKorp()
    {
        return view('main.pages.info-korp',[
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Orang Awam controller`
    public function orangAwam()
    {
        return view('main.pages.orang-awam',[
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Page Element Controller
    public function pageElement()
    {
        return view('main.pages.page-element',[
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }
}
