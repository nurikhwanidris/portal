<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\BeritaTerkini;
use App\Models\Pengumuman;
use App\Models\Slider;
use App\Models\Tender;
use App\Models\Quote;
use Carbon\Carbon;

class MainController extends Controller
{
    // Index controller
    public function index()
    {
        return view('main.index', [
            'sliders' => Slider::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])
            ->orWhere('show', null)
            ->with('statuses')->get(),
            'annoucements' => Pengumuman::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])->with('status')->get(),
            'beritaTerkini' => BeritaTerkini::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])
            ->orWhere('show', null)
            ->with('status')->get(),
            'tenders' => Tender::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])->with('status')->limit(5)->get(),
            'quotes' => Quote::where([
                ['show', '<=', Carbon::now()],
                ['hide', '>=', Carbon::now()],
            ])->with('status')->get(),
        ]);
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

