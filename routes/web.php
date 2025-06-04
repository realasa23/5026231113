<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
// import java.io;

// System.out.print();
// Disini pakai ::

Route::get('/', function () { // internal controller
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog'); // tidak ada underline karena belum ada filenya
});

Route::get('hello', [Link::class, 'helloword']); // menggunakan controller

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('LatihanLayoutPR', function () {
    return view('LatihanLayoutPR');
});

Route::get('LatihanLayout', function () {
    return view('LatihanLayout');
});

Route::get('template1', function () {
    return view('template1');
});

Route::get('tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('Latihan ETS', function () {
    return view('indexlatihanets');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('ETS', function () {
    return view('indexets');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('linkfe', function () {
    return view('linkfe');
});


Route::get('dosen', [Link::class, 'index']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

// route blog
Route::get('/blog',  [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit'] );
Route::post('/pegawai/update', [PegawaiController::class,'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus'] );
