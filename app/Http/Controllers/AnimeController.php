<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnimeController extends Controller
{
    public function indexanime()
    {
        // mengambil data dari table anime
        $anime = DB::table('anime')->get();

        // mengirim data anime ke view index
        return view('anime.index', ['anime' => $anime]);
    }

    // menampilkan view form tambah anime
    public function tambah()
    {
        // memanggil view tambah
        return view('anime.tambah');
    }

    // insert data ke table anime
    public function store(Request $request)
    {
        // insert data ke table anime
        // ID tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('anime')->insert([
            'Judul'  => $request->Judul,
            'Rating' => $request->Rating,
            'Genre'    => $request->Genre
        ]);
        // alihkan halaman ke halaman anime
        return redirect('/anime');
    }

    // method untuk edit data anime
    public function edit($kode)
    {
        // mengambil data anime berdasarkan kode yang dipilih
        $anime = DB::table('anime')->where('ID', $kode)->get();
        // passing data anime yang didapat ke view editanime.blade.php
        return view('anime.edit', ['anime' => $anime]);
    }

    // update data anime
    public function update(Request $request)
    {
        // update data anime
        DB::table('anime')->where('ID', $request->ID)->update([
            'Judul'  => $request->Judul,
            'Rating' => $request->Rating,
            'Genre'    => $request->Genre
        ]);
        // alihkan halaman ke halaman anime
        return redirect('/anime');
    }

    // hapus data anime
    public function hapus($kode)
    {
        // menghapus data anime berdasarkan kode yang dipilih
        DB::table('anime')->where('ID', $kode)->delete();

        // alihkan halaman ke halaman anime
        return redirect('/anime');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table anime sesuai pencarian ID
        $anime = DB::table('anime')
            ->where('ID', 'like', "%" . $cari . "%")
            ->get();

        // mengirim data anime ke view index
        return view('anime.index', ['anime' => $anime]);
    }
}
