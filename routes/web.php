<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PagesController;
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

// Landing page route
Route::get('/', function () {
    return view('welcome');
});

// SPSM CMS route
Route::get('/spsm', [HomeController::class, 'index'])->middleware('auth');

// Application index
Route::get('/spsm/application', [ApplicationController::class, 'index']);

// Login Route
Route::get('/spsm/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// User login route
Route::post('/spsm/login', [LoginController::class, 'authenticate']);

// User logout route
Route::post('/spsm/logout', [LoginController::class, 'logout']);

// Page route
Route::get('/spsm/admin/page', [PagesController::class, 'index']);

// Check slug MY
Route::get('/spsm/admin/page/checkSlugMy', [PagesController::class, 'checkSlugMy'])->middleware('auth');

// Check slug En
Route::get('/spsm/admin/page/checkSlugEn', [PagesController::class, 'checkSlugEn'])->middleware('auth');

// Create page route
// Route::post('/spsm/admin/page/create', [PagesController::class, 'store']);

// CRUD page route
Route::resource('/spsm/admin/page', PagesController::class)->middleware('auth');
