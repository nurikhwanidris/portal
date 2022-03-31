<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Slider;
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
            ])->with('statuses')->get(),
            'annoucements' => Pengumuman::where([
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

}

