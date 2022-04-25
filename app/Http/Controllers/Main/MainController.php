<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

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

    // Page Element Controller
    public function pageElement()
    {
        return view('main.pages.page-element');
    }

    // Warga Jupem Controller
    public function wargaJupem()
    {
        return view('main.pages.warga-jupem');
    }

    // FAQ Controller
    public function faq()
    {
        return view('main.pages.faq');
    }

    // Sitemap Controller
    public function sitemap()
    {
        return view('main.pages.sitemap');
    }
}
