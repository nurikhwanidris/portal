<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\BeritaTerkini;
use App\Models\Pegawai;
use App\Models\Pengumuman;
use App\Models\Post;
use App\Models\Quote;
use App\Models\SoalanLazim;
use App\Models\Tender;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{

    // Visitor Counter
    public function counter()
    {
        $counter = Visitor::whereMonth('date', '=', now()->format('m'))->get()->count();

        return $counter;
    }

    // Last Activity
    public function activity()
    {
        $activity = DB::table('logs')->select('log_date')->orderBy('log_date', 'desc')->first();

        return $activity;
    }

    // Index controller
    public function index()
    {
        return view('main.index', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Info Korporat controller
    public function infoKorp()
    {
        return view('main.pages.info-korp', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Orang Awam controller`
    public function orangAwam()
    {
        return view('main.pages.orang-awam', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Page Element Controller
    public function pageElement()
    {
        return view('main.pages.page-element', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Warga Jupem Controller
    public function wargaJupem()
    {
        return view('main.pages.warga-jupem', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // FAQ Controller
    public function faq()
    {
        return view('main.pages.faq', [
            'faq' => SoalanLazim::all(),
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Sitemap Controller
    public function sitemap()
    {
        return view('main.pages.sitemap', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // DasarPrivasi Controller
    public function dasarPrivasi()
    {
        return view('main.pages.dasar-privasi', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // DasarKeselamatan Controller
    public function dasarKeselamatan()
    {
        return view('main.pages.dasar-keselamatan', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Penafian Controller
    public function penafian()
    {
        return view('main.pages.penafian', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Penafian Controller
    public function infoSemasa()
    {
        return view('main.pages.info-semasa', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // eKadaster Controller
    public function eKadaster()
    {
        return view('main.pages.ekadaster', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // staps Controller
    public function staps()
    {
        return view('main.pages.staps', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Visi-Misi Controller
    public function visiMisi()
    {
        return view('main.pages.visi-misi', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Tugas Peranan Controller
    public function tugasPeranan()
    {
        return view('main.pages.tugas-peranan', [
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }


    // Pengumuman Read Controller
    public function pengumumanRead($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('main.pages.pages', [
            'page' => $pengumuman,
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Berita Terkini Read Controller
    public function beritaTerkiniRead($id)
    {
        $beritaTerkini = BeritaTerkini::findOrFail($id);

        return view('main.pages.pages', [
            'page' => $beritaTerkini,
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Global Search
    public function carian(Request $request)
    {
        $search = $request->input('carian');

        return view('main.pages.carian', [
            'search' => $search,
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
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
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
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
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
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
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }

    // Carian Pegawai
    public function carianPegawai(Request $request)
    {
        $search = $request->input('nama');

        $pegawai = Pegawai::query()
            ->where('name_my', 'like', '%' . $search . '%')
            ->orderBy('sort_order', 'asc')
            ->paginate(15);

        return view('main.pages.carian-pegawai', [
            'search' => $search,
            'pegawais' => $pegawai,
            'counter' =>  $this->counter(),
            'activity' => $this->activity(),
        ]);
    }
}
