<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BerasDBController extends Controller
{
    public function indexberas()
    {
        // mengambil data dari table beras
        $beras = DB::table('beras')->paginate(10);

        // mengirim data beras ke view index
        return view('indexberas', ['beras' => $beras]);
    }

    // menampilkan view form tambah beras
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahberas');
    }

    // insert data ke table beras
    public function store(Request $request)
    {
        // insert data ke table beras
        // kodeberas tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('beras')->insert([
            'merkberas'  => $request->merkberas,
            'stockberas' => $request->stockberas,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman beras
        return redirect('/beras');
    }

    // method untuk edit data beras
    public function edit($kode)
    {
        // mengambil data beras berdasarkan kode yang dipilih
        $beras = DB::table('beras')->where('kodeberas', $kode)->get();
        // passing data beras yang didapat ke view editberas.blade.php
        return view('editberas', ['beras' => $beras]);
    }

    // update data beras
    public function update(Request $request)
    {
        // update data beras
        DB::table('beras')->where('kodeberas', $request->kodeberas)->update([
            'merkberas'  => $request->merkberas,
            'stockberas' => $request->stockberas,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman beras
        return redirect('/beras');
    }

    // hapus data beras
    public function hapus($kode)
    {
        // menghapus data beras berdasarkan kode yang dipilih
        DB::table('beras')->where('kodeberas', $kode)->delete();

        // alihkan halaman ke halaman beras
        return redirect('/beras');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table beras sesuai pencarian merk
        $beras = DB::table('beras')
            ->where('merkberas', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data beras ke view index
        return view('indexberas', ['beras' => $beras]);
    }
}
