<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\BeritaTerkiniController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LaporanTahunanController;
use App\Http\Controllers\Admin\LaporanMesyuaratController;
use App\Http\Controllers\Admin\KeratanAkhbarController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\PopupController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\TenderController;
use App\Http\Controllers\Admin\BeritaUkurController;
use App\Http\Controllers\Admin\GisController;
use App\Http\Controllers\Admin\JabatanUnitController;
use App\Http\Controllers\Admin\KertasKerjaController;
use App\Http\Controllers\Admin\MaklumBalasController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PekelilingController;
use App\Http\Controllers\Admin\PiagamPelangganController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\SoalanLazimController;
use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Route
|--------------------------------------------------------------------------
*/

// SPSM CMS route
Route::get('/spsm', [HomeController::class, 'index'])->middleware('auth');

// Admin route
Route::get('/spsm/admin')->middleware('auth');

// Login Route
Route::get('/spsm/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// User login route
Route::post('/spsm/login', [LoginController::class, 'authenticate']);

// User logout route
Route::post('/spsm/logout', [LoginController::class, 'logout']);

// Check slug MY
Route::get('/spsm/admin/page/checkSlugMy', [PagesController::class, 'checkSlugMy'])->middleware('auth');

// Check slug En
Route::get('/spsm/admin/page/checkSlugEn', [PagesController::class, 'checkSlugEn'])->middleware('auth');

// CRUD page route
Route::resource('/spsm/admin/page', PagesController::class)->middleware('auth');

// Halaman Bahasa route
Route::get('/halaman/{slug_my}', [PagesController::class, 'getPageMy']);

// Halaman Bahasa route
Route::get('/page/{slug_en}', [PagesController::class, 'getPageEn']);

// Page upload route
Route::post('/upload/img', [PagesController::class, 'upload'])->name('pageUpload');

// Media index route
Route::get('/spsm/admin/media', [MediaController::class, 'index'])->middleware('auth');

// Media upload route
Route::post('/spsm/admin/media/upload', [MediaController::class, 'store'])->middleware('auth');

// Media delete route
Route::delete('/spsm/admin/media/delete/{media}', [MediaController::class, 'destroy'])->middleware('auth');

// Slider create route
Route::get('/spsm/admin/slider/create', [MediaController::class, 'sliderCreate'])->middleware('auth');

// Slider store route
Route::post('/spsm/admin/slider/save', [MediaController::class, 'sliderSave'])->middleware('auth');

// Slider list route
Route::get('/spsm/admin/slider/list', [MediaController::class, 'sliderList'])->middleware('auth');

// Slider edit route
Route::get('/spsm/admin/slider/view/{slider}', [MediaController::class, 'sliderEdit'])->middleware('auth');

// Slider update route
Route::put('/spsm/admin/slider/update/{slider}', [MediaController::class, 'sliderUpdate'])->middleware('auth');

// Slider delete route
Route::delete('/spsm/admin/slider/delete/{slider}', [MediaController::class, 'sliderDelete'])->middleware('auth');

// Popup Route
Route::resource('/spsm/admin/popup', PopupController::class)->middleware('auth');

// Keratan Akhbar route
Route::resource('/spsm/admin/newspaper', KeratanAkhbarController::class)->middleware('auth');

// Pengumuman route
Route::resource('/spsm/admin/pengumuman', PengumumanController::class)->middleware('auth');

// Sebut harga route
Route::resource('/spsm/admin/quote', QuoteController::class)->middleware('auth');

// Tender route
Route::resource('/spsm/admin/tender', TenderController::class)->middleware('auth');

// Laporan Tahunan route
Route::resource('/spsm/admin/laporan_tahunan', LaporanTahunanController::class)->middleware('auth');

// Laporan Mesyuarat route
Route::resource('/spsm/admin/laporan_mesyuarat', LaporanMesyuaratController::class)->middleware('auth');

// Berita Ukur route
Route::resource('/spsm/admin/berita_ukur', BeritaUkurController::class)->middleware('auth');

// Kertas Kerja route
Route::resource('/spsm/admin/kertas_kerja', KertasKerjaController::class)->middleware('auth');

// Piagam Pelanggan route
Route::resource('/spsm/admin/piagam_pelanggan', PiagamPelangganController::class)->middleware('auth');

// Pegawai route
Route::resource('/spsm/admin/pegawai', PegawaiController::class)->middleware('auth');

// Maklum Balas list route
Route::get('/spsm/admin/maklum_balas/list', [MaklumBalasController::class, 'list'])->middleware('auth');

// Maklum Balas reply admin route
Route::get('/spsm/admin/maklum-balas/{id}/reply', [MaklumBalasController::class, 'reply'])->middleware('auth');

// Maklum Balas reply admin store route
Route::post('/spsm/admin/maklum-balas/balas/{id}', [MaklumBalasController::class, 'adminReply'])->middleware('auth');

// Maklum Balas user reply route
Route::post('/maklum-balas/balas/{id}', [MaklumBalasController::class, 'userReply']);

// Jabatan Route
Route::resource('/spsm/admin/jabatan', JabatanUnitController::class)->middleware('auth');

// Pekeliling Route
Route::resource('/spsm/admin/pekeliling', PekelilingController::class)->middleware('auth');

Route::resource('/spsm/admin/berita_terkini', BeritaTerkiniController::class)->middleware('auth');

// Index GIS Route
Route::get('/spsm/admin/buletingis', [GisController::class, 'index'])->middleware('auth');

// Create GIS route
Route::get('/spsm/admin/buletingis/create', [GisController::class, 'create'])->middleware('auth');

// Edit GIS route
Route::get('/spsm/admin/buletingis/{edit}/edit', [GisController::class, 'edit'])->middleware('auth');

// Update GIS route
Route::put('/spsm/admin/buletingis/{update}', [GisController::class, 'change'])->middleware('auth');

// Delete GIS route
Route::delete('/spsm/admin/buletingis/{delete}', [GisController::class, 'delete'])->middleware('auth');

// Transaksi route
Route::resource('/spsm/admin/transaksi', TransaksiController::class)->middleware('auth');

// Soalan Lazim route
Route::resource('/spsm/admin/soalan_lazim', SoalanLazimController::class)->middleware('auth');

// Soalan Lazim route
Route::get('/spsm/admin/soalan_lazim/kategori', [SoalanLazimController::class, 'soalanLazimCategory'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/

Route::redirect('/', 'ms');

Route::group(['prefix' => '{language}'], function () {

    // Index Route
    Route::get('/', [MainController::class, 'index'])->middleware('visitor')->name('index');

    // Info Korp route
    Route::get('/info-korp', [MainController::class, 'infoKorp'])->name('info-korp');

    // Visi Misi route
    Route::get('/visi-misi', [MainController::class, 'visiMisi'])->name('visi-misi');

    // Tugas Peranan Route
    Route::get('/tugas-peranan', [MainController::class, 'tugasPeranan'])->name('tugas-peranan');

    // Orang Awam Route
    Route::get('/orang-awam', [MainController::class, 'orangAwam'])->name('orang-awam');

    // Page Element Route
    Route::get('/page-element', [MainController::class, 'pageElement']);

    // Warga Jupem Route
    Route::get('/warga-jupem', [MainController::class, 'wargaJupem'])->name('warga-jupem');

    // FAQ Route
    Route::get('/faq', [MainController::class, 'faq'])->name('faq');

    // Sitemap Route
    Route::get('/peta-laman', [MainController::class, 'sitemap'])->name('sitemap');

    // Dasar Privasi Route
    Route::get('/dasar-privasi', [MainController::class, 'dasarPrivasi'])->name('dasar-privasi');

    // Dasar Keselamatan Route
    Route::get('/dasar-keselamatan', [MainController::class, 'dasarKeselamatan'])->name('dasar-keselamatan');

    // Dasar Penafian Route
    Route::get('/penafian', [MainController::class, 'penafian'])->name('penafian');

    // Info Semasa Route

    Route::get('/info-semasa', [MainController::class, 'infoSemasa'])->name('info-semasa');

    // eKadaster Route
    Route::get('/eKadaster', [MainController::class, 'eKadaster'])->name('eKadaster');

    // staps Route
    Route::get('/staps', [MainController::class, 'staps'])->name('staps');

    // Global Search Route
    Route::get('/carian/', [MainController::class, 'carian'])->name('carian');

    // Carian Pegawai Route
    Route::get('/carian/pegawai', [MainController::class, 'carianPegawai'])->name('carian-pegawai');

    // Maklum Balas create route
    Route::get('/maklum-balas', [MaklumBalasController::class, 'create']);

    // Maklum Balas show route
    Route::get('/maklum-balas/{id}', [MaklumBalasController::class, 'show'])->name('maklum-balas');

    // Maklum Balas store route
    Route::post('/maklum-balas/store', [MaklumBalasController::class, 'store'])->name('maklum-balas-store');

    /*
    |--------------------------------------------------------------------------
    | Read Routes
    |--------------------------------------------------------------------------
    */

    // Pengumuman Read Route
    Route::get('/info-semasa/pengumuman/{id}', [MainController::class, 'pengumumanRead'])->name('pengumuman-read');

    // Berita Terkini Read Route
    Route::get('/info-semasa/berita-terkini/{id}', [MainController::class, 'beritaTerkiniRead'])->name('berita-terkini-read');

    // Tender Read Route
    Route::get('/tender/{id}', [MainController::class, 'tenderRead'])->name('tender-read');

    // Sebut Harga Read Route
    Route::get('/sebut-harga/{id}', [MainController::class, 'sebutHargaRead'])->name('sebut-harga-read');

    // Global Search Post Read Route
    Route::get('/carian/papar/post/{id}', [MainController::class, 'carianPost'])->name('carian-post');

    // Global Search Pengumuman Read Route
    Route::get('/carian/papar/pengumuman/{id}', [MainController::class, 'carianPengumuman'])->name('carian-pengumuman');

    // Pengumuman Read Route
    Route::get('/pengumuman/{id}', [MainController::class, 'pengumumanRead'])->name('pengumuman-read');

    // Global Search Berita Terkini Read Route
    Route::get('/carian/papar/berita-terkini/{id}', [MainController::class, 'carianBeritaTerkini'])->name('carian-berita-terkini');
});
