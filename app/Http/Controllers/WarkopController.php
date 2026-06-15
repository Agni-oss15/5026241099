<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class warkopController extends Controller
{
    public function indexwarkop()
    {
        // mengambil data dari table warkop
        $warkop = DB::table('warkop')->get();

        // mengirim data warkop ke view index
        return view('warkop.index', ['warkop' => $warkop]);
    }

    // menampilkan view form tambah warkop
    public function tambah()
    {
        // memanggil view tambah
        return view('warkop.tambah');
    }

    // insert data ke table warkop
    public function store(Request $request)
    {
        // insert data ke table warkop
        // ID tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('warkop')->insert([
            'MapId'  => $request->MapId,
            'Nama' => $request->Nama,
            'Harga'    => $request->Harga,
            'Lokasi'    => $request->Lokasi
        ]);
        // alihkan halaman ke halaman warkop
        return redirect('/warkop');
    }

    // method untuk edit data warkop
    public function edit($MapId)
    {
        $warkop = DB::table('warkop')->where('MapId', $MapId)->first();

        if (!$warkop) {
            abort(404);
        }

        return view('warkop.edit', compact('warkop'));
    }

    public function update(Request $request, $MapId)
    {
        $request->validate([
            'MapId' => [
                'required',
                'string',
                'max:10',
                Rule::unique('warkop', 'MapId')->ignore($MapId, 'MapId'),
            ],
            'Nama' => 'required|string|max:20',
            'Harga' => 'required|string|max:5',
            'Lokasi' => 'required|string|max:30',
        ]);

        DB::table('warkop')
            ->where('MapId', $MapId)
            ->update([
                'MapId' => $request->MapId,
                'Nama' => $request->Nama,
                'Harga' => $request->Harga,
                'Lokasi' => $request->Lokasi,
            ]);

        return redirect('/warkop')->with('success', 'Data warkop berhasil diubah.');
    }

    // hapus data warkop
    public function hapus($kode)
    {
        // menghapus data warkop berdasarkan kode yang dipilih
        DB::table('warkop')->where('MapId', $kode)->delete();

        // alihkan halaman ke halaman warkop
        return redirect('/warkop');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table warkop sesuai pencarian MapId
        $warkop = DB::table('warkop')
            ->where('MapId', 'like', "%" . $cari . "%")
            ->get();

        // mengirim data warkop ke view index
        return view('warkop.index', ['warkop' => $warkop]);
    }
}
