<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MaklumBalas as MailMaklumBalas;
use App\Models\MaklumBalas;
use App\Models\MaklumBalasReply;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MaklumBalasController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.pages.maklum-balas', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
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
            'product' => 'required',
            'typeOfQuestion' => 'required',
            'fullName' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $maklumBalas = MaklumBalas::create($validateData);

        $data = [
            'id' => $maklumBalas->id,
            'product' => $validateData['product'],
            'typeOfQuestion' => $validateData['typeOfQuestion'],
            'fullName' => $validateData['fullName'],
            'email' => $validateData['email'],
            'phone' => $validateData['phone'],
            'title' => $validateData['title'],
            'content' => $validateData['content'],
        ];

        $mail = new MailMaklumBalas($data);

        Mail::to($validateData['email'])->send($mail);

        return back()->with('success', 'Satu maklum balas telah dihantar. Anda boleh menyemak email anda untuk mengetahui status maklum balas anda.');
    }

    public function list()
    {
        return view('spsm.admin.maklum_balas.list', [
            'title' => 'Senarai Maklum Balas',
            'leadCrumbs' => 'Maklum Balas',
            'link' => '/spsm/admin/maklum_balas/list',
            'responses' => MaklumBalas::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function show($id)
    {
        return view('main.pages.papar-maklum-balas', [
            'title' => 'Maklum Balas',
            'leadCrumbs' => 'Maklum Balas',
            'link' => '/spsm/admin/maklum_balas/list',
            'response' => MaklumBalas::findOrFail($id),
            'answer' => MaklumBalasReply::where('maklum_balas_id', $id)->orderBy('created_at', 'desc')->get(),
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }
}
