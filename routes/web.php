<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h2>Halu, Selamat datang di  tutorial laravel www.malas ngoding.com</h2>";
});
Route::get('blog', function () {
    return view('blog');//gaada file jd ga ke run
});
Route::get('hello', [Link::class,'helloword']);

Route::get('/frontend', function () {
    return view('frontend');
});
Route::get('/bahan', function () {
    return view('bahan');
});
Route::get('/bootstrap1', function () {
    return view('bootstrap1');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba4', function () {
    return view('coba4');
});
Route::get('/cobalagi', function () {
    return view('cobalagi');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/js1', function () {
    return view('js1');
});
Route::get('/js2', function () {
    return view('js2');
});
Route::get('/linktree', function () {
    return view('linktree');
});
Route::get('/pertama', function () {
    return view('pertama');
});
Route::get('/soal4', function () {
    return view('soal4');
});
Route::get('/template', function () {
    return view('template');
});
route ::get ('dosen', [link :: class, 'index']);
route ::get ('/pegawai/{nama}', [pegawaiController :: class, 'index']);
route ::get ('/formulir', [pegawaiController :: class, 'formulir']);
Route::post('/formulir/proses', [pegawaiController::class, 'proses']);

