<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class nilaikuliah extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('e5',['nilaikuliah' => $nilaikuliah]);
    }
    public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}
    public function store(Request $request)
    {
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/e5');

	}
}
