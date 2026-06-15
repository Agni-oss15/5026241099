<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\berasDBController;
use App\Http\Controllers\keranjangbelanja;
use App\Http\Controllers\nilaikuliah;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\WarkopController;
use App\Http\Controllers\mypegawaiController;

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
//siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/anime', [AnimeController::class, 'indexanime']);
Route::get('/anime/cari', [AnimeController::class, 'cari']);
Route::get('/anime/tambah', [AnimeController::class, 'tambah']);
Route::post('/anime/store', [AnimeController::class, 'store']);
Route::get('/anime/edit/{kode}', [AnimeController::class, 'edit']);
Route::post('/anime/update', [AnimeController::class, 'update']);
Route::get('/anime/hapus/{kode}', [AnimeController::class, 'hapus']);

Route::get('/warkop', [WarkopController::class, 'indexwarkop']);
Route::get('/warkop/cari', [WarkopController::class, 'cari']);
Route::get('/warkop/tambah', [WarkopController::class, 'tambah']);
Route::post('/warkop/store', [WarkopController::class, 'store']);
Route::get('/warkop/edit/{kode}', [WarkopController::class, 'edit'])->name('warkop.edit');
Route::put('/warkop/update/{kode}', [WarkopController::class, 'update'])->name('warkop.update');
Route::get('/warkop/hapus/{kode}', [WarkopController::class, 'hapus']);

Route::get('/eas', [mypegawaiController::class, 'index'])->name('mypegawai.index');
Route::get('/eas/create', [mypegawaiController::class, 'create'])->name('mypegawai.create');
Route::post('/eas', [mypegawaiController::class, 'store'])->name('mypegawai.store');
Route::get('/eas/{kodepegawai}/edit', [mypegawaiController::class, 'edit'])->name('mypegawai.edit');
Route::put('/eas/{kodepegawai}', [mypegawaiController::class, 'update'])->name('mypegawai.update');
Route::delete('/eas/{kodepegawai}', [mypegawaiController::class, 'destroy'])->name('mypegawai.destroy');


