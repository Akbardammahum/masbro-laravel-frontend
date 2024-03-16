<?php

use App\Http\Controllers\Data;
use App\Http\Controllers\home;
use App\Http\Controllers\Keuangan;
use App\Http\Controllers\Menu;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pesanan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/header', function () {
    return view('layouts/header');
});

Route::get('/home', [home::class, 'index'])->name('home');
Route::get('/pesanan', [Pesanan::class, 'index'])->name('pesanan');
Route::get('/menu', [Menu::class, 'index'])->name('menu');
Route::get('/keuangan', [Keuangan::class, 'index'])->name('keuangan');
Route::get('/data', [Data::class, 'index'])->name('data');
