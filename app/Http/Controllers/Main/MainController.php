<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\BeritaTerkini;
use App\Models\Pengumuman;
use App\Models\Post;
use App\Models\Quote;
use App\Models\SoalanLazim;
use App\Models\Tender;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\MergeValue;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    // Index controller
    public function index()
    {
        return view('main.index', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Info Korporat controller
    public function infoKorp()
    {
        return view('main.pages.info-korp', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Orang Awam controller`
    public function orangAwam()
    {
        return view('main.pages.orang-awam', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Page Element Controller
    public function pageElement()
    {
        return view('main.pages.page-element', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Warga Jupem Controller
    public function wargaJupem()
    {
        return view('main.pages.warga-jupem', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // FAQ Controller
    public function faq()
    {
        return view('main.pages.faq', [
            'faq' => SoalanLazim::all(),
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // Sitemap Controller
    public function sitemap()
    {
        return view('main.pages.sitemap', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first()
        ]);
    }

    // DasarPrivasi Controller
    public function dasarPrivasi()
    {
        return view('main.pages.dasar-privasi', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // DasarKeselamatan Controller
    public function dasarKeselamatan()
    {
        return view('main.pages.dasar-keselamatan', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Penafian Controller
    public function penafian()
    {
        return view('main.pages.penafian', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Penafian Controller
    public function infoSemasa()
    {
        return view('main.pages.info-semasa', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // eKadaster Controller
    public function eKadaster()
    {
        return view('main.pages.ekadaster', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Visi-Misi Controller
    public function visiMisi()
    {
        return view('main.pages.visi-misi', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Tugas Peranan Controller
    public function tugasPeranan()
    {
        return view('main.pages.tugas-peranan', [
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Pengumuman Read Controller
    public function pengumumanRead($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('main.pages.pages', [
            'page' => $pengumuman,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Berita Terkini Read Controller
    public function beritaTerkiniRead($id)
    {
        $beritaTerkini = BeritaTerkini::findOrFail($id);

        return view('main.pages.pages', [
            'page' => $beritaTerkini,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Global Search
    public function carian(Request $request)
    {

        $search = $request->input('carian');

        return view('main.pages.carian', [
            'search' => $search,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Global Search Post Read
    public function carianPost($id)
    {
        // Posts Table
        $post = Post::query()
            ->where('id', '=', $id)
            ->first();

        return view('main.pages.carian-papar', [
            'post' => $post,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Global Search Pengumuman Read
    public function carianPengumuman($id)
    {
        // Pengumuman Table
        $pengumuman = Pengumuman::query()
            ->where('id', '=', $id)
            ->first();

        return view('main.pages.carian-papar', [
            'pengumuman' => $pengumuman,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }

    // Global Search Berita Terkini Read
    public function carianBeritaTerkini($id)
    {
        // Berita Terkini Table
        $beritaTerkini = BeritaTerkini::query()
            ->where('id', '=', $id)
            ->first();

        return view('main.pages.carian-papar', [
            'beritaTerkini' => $beritaTerkini,
            'counter' => Visitor::whereMonth('date', '=', now()->format('m'))->get()->count(),
            'activity' => DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first(),
        ]);
    }
}
