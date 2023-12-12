<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use League\CommonMark\Node\Block\Document;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome', [
        "title" => "welcome"
    ]);
});

Route::get('/dokumen', [PostController::class, 'dokumen']);

Route::get('/permintaan', [PostController::class, 'index']);
Route::get('/data', [PostController::class, 'data'])->middleware('auth');
Route::post('/data', [PostController::class, 'store']);

Route::get('/inventaris', function (){
    return view('inventaris', [
        "title" => "Inventaris Bangsis"
    ]);
});

Route::get('/kegiatan', function (){
    return view('kegiatan', [
        "title" => "Laporan Kegiatan"
    ]);
});

Route::get('/resume', function (){
    return view('resume', [
        "title" => "Rapat Resume"
    ]);
});
Route::get('/nodin', function (){
    return view('nodin', [
        "title" => "Rapat Nodin"
    ]);
});
Route::get('/notulen', function (){
    return view('notulen', [
        "title" => "Rapat Notulen"
    ]);
});
Route::get('/peraturan', function(){
    return view('peraturan', [
        "title" => "Digitalisasi Dokumen Peraturan"
    ]);
});
Route::get('/naskah', function(){
    return view('naskah', [
        "title" => "Digitalisasi Dokumen Naskah"
    ]);
});
Route::get('/paparan', function(){
    return view('paparan', [
        "title" => "Digitalisasi Dokumen Paparan"
    ]);
});
Route::get('/sisfo', function(){
    return view('sisfo', [
        "title" => "Lapkonis Sisfo"
    ]);
});
Route::get('/kinerja', function(){
    return view('kinerja', [
        "title" => "Laporan Kinerja"
    ]);
});
Route::get('/magang', function(){
    return view('magang', [
        "title" => "Magang Mahasiswa"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);














Route::get('/about', function () {
    return view('home', [
        "nama" => "dzulfikar",
        "email" => "itang@gmail.com"
    ]);
});