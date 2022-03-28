<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanTahunanController;
use App\Http\Controllers\LaporanMesyuaratController;
use App\Http\Controllers\KeratanAkhbarController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\BeritaUkurController;
use App\Http\Controllers\GisController;
use App\Http\Controllers\JabatanUnitController;
use App\Http\Controllers\KertasKerjaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MaklumBalasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PekelilingController;
use App\Http\Controllers\PiagamPelangganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // Landing page route
// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/spsm/admin/maklum_balas/list', [MaklumBalasController::class,'list'])->middleware('auth');

// Maklum Balas create route
Route::get('/maklum-balas',[MaklumBalasController::class,'create']);

// Maklum Balas store route
Route::post('/maklum-balas/store',[MaklumBalasController::class,'store']);

// Jabatan Route
Route::resource('/spsm/admin/jabatan', JabatanUnitController::class)->middleware('auth');

// Pekeliling Route
Route::resource('/spsm/admin/pekeliling', PekelilingController::class)->middleware('auth');

// Index GIS Route
Route::get('/spsm/admin/buletingis',[GisController::class, 'index'])->middleware('auth');

// Create GIS route
Route::get('/spsm/admin/buletingis/create',[GisController::class, 'create'])->middleware('auth');

// Edit GIS route
Route::get('/spsm/admin/buletingis/{edit}/edit',[GisController::class, 'edit'])->middleware('auth');

// Update GIS route
Route::put('/spsm/admin/buletingis/{update}',[GisController::class, 'change'])->middleware('auth');

// Delete GIS route
Route::delete('/spsm/admin/buletingis/{delete}', [GisController::class, 'delete'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Main Routes
|--------------------------------------------------------------------------
*/

// Index Route
Route::get('/', [MainController::class, 'index']);
