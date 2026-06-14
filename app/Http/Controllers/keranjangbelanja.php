<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class keranjangbelanja extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('d4',['keranjangbelanja' => $keranjangbelanja]);
    }

    public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}
    public function store(Request $request)
    {
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/d4');

	}
    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/d4');
	}
}
