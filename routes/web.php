<?php

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
