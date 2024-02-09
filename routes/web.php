<?php

use App\Models\Sekolah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;


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
Route::get('/', [ SekolahController::class, 'index']);

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/list-sekolah', [ SekolahController::class, 'list']);

Route::get('/siswa', function () {
    return view('siswa', [
        "title" => "siswa"
    ]);
});


//halaman single post
Route::get('sekolah/{sekolah:slug}' , [ SekolahController::class, 'info_sekolah']);

