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
     * Show the form for cting a new resource.
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
            'reply' => '',
        ];

        $mail = new MailMaklumBalas($data);

        Mail::to($validateData['email'])->send($mail);

        return back()->with('success', 'Satu maklum balas telah dihantar. Anda boleh menyemak email anda untuk mengetahui status maklum balas anda.');
    }

    // Maklum Balas list
    public function list()
    {
        return view('spsm.admin.maklum_balas.list', [
            'title' => 'Senarai Maklum Balas',
            'leadCrumbs' => 'Maklum Balas',
            'link' => '/spsm/admin/maklum_balas/list',
            'responses' => MaklumBalas::orderBy('created_at', 'desc')->get(),
        ]);
    }

    // Maklum Balas show
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

    // Maklum Balas reply
    public function reply($id)
    {
        return view('spsm.admin.maklum_balas.reply', [
            'title' => 'Jawab Maklum Balas',
            'leadCrumbs' => 'Maklum Balas',
            'link' => '/spsm/admin/maklum_balas/list',
            'response' => MaklumBalas::findOrFail($id),
            'answer' => MaklumBalasReply::where('maklum_balas_id', $id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    // Maklum Balas User Reply
    public function userReply(Request $request, $id)
    {
        $validateData = $request->validate([
            'reply' => 'required',
        ]);

        MaklumBalas::findOrFail($id)->update([
            'status' => 4,
        ]);

        $maklumBalasReply = MaklumBalasReply::create([
            'maklum_balas_id' => $id,
            'reply' => $validateData['reply'],
        ]);

        return back()->with('success', 'Satu jawapan telah dihantar.');
    }

    // Maklum Balas Admin Reply
    public function adminReply(Request $request, $id)
    {
        $validateData = $request->validate([
            'reply' => 'required',
            'email' => 'required',
        ]);

        if ($request->status == '') {
            MaklumBalas::findOrFail($id)->update([
                'status' => 2,
            ]);
        } else {
            MaklumBalas::findOrFail($id)->update([
                'status' => $request->status,
            ]);
        }

        MaklumBalasReply::create([
            'user_id' => auth()->user()->id,
            'maklum_balas_id' => $id,
            'reply' => $validateData['reply'],
        ]);

        $data = [
            'id' => $id,
            'reply' => $validateData['reply'],
        ];

        $mail = new MailMaklumBalas($data);

        Mail::to($validateData['email'])->send($mail);

        return redirect('/spsm/admin/maklum_balas/list')->with('success', 'Satu jawapan telah dihantar.');
    }
}
