<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\berasDBController;
use App\Http\Controllers\keranjangbelanja;
use App\Http\Controllers\nilaikuliah;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('template', function () {
	return view('template');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('bio', [DosenController::class, 'biodata']);
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('ituindex', function () {
	return view('index');
});

Route::get('itulinktree', function () {
	return view('linktree');
});

Route::get('ituintro', function () {
	return view('intro');
});

Route::get('itunews', function () {
	return view('news');
});

Route::get('itunewslagi', function () {
	return view('newsLagi');
});

Route::get('ituresponsive', function () {
	return view('responsive');
});

Route::get('itutemplate', function () {
	return view('template');
});

Route::get('menu', function () {
	return view('all-menu');
});

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);


Route::get('/beras', [berasDBController::class, 'indexberas']);
Route::get('/beras/cari', [berasDBController::class, 'cari']);
Route::get('/beras/tambah', [berasDBController::class, 'tambah']);
Route::post('/beras/store', [berasDBController::class, 'store']);
Route::get('/beras/edit/{kode}', [berasDBController::class, 'edit']);
Route::post('/beras/update', [berasDBController::class, 'update']);
Route::get('/beras/hapus/{kode}', [berasDBController::class, 'hapus']);

//e5
Route::get('e5', [nilaikuliah::class, 'index']);
Route::get('e5/tambah', [nilaikuliah::class, 'tambah']);
Route::post('e5/store', [nilaikuliah::class, 'store']);
Route::get('e5/edit/{id}', [nilaikuliah::class, 'edit']);
Route::post('e5/update', [nilaikuliah::class, 'update']);
Route::get('e5/hapus/{id}', [nilaikuliah::class, 'hapus']);
Route::get('/e5/cari', [nilaikuliah::class, 'cari']);
//d4
Route::get('d4', [keranjangbelanja::class, 'index']);
Route::get('d4/tambah', [keranjangbelanja::class, 'beli']);
Route::post('d4/store', [keranjangbelanja::class, 'store']);
Route::get('d4/hapus/{id}', [keranjangbelanja::class, 'hapus']);
