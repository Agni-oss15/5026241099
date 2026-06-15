<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//wajib untuk import DB dan Rule
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class mypegawaiController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();
        return view('mypegawai.index', compact('mypegawai'));
    }

    public function create()
    {
        return view('mypegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|max:5',
            'departemen' => 'required|string|max:10',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data mypegawai berhasil ditambahkan.');
    }

    public function edit($kodepegawai)
    {
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

        if (!$mypegawai) {
            abort(404);
        }

        return view('mypegawai.edit', compact('mypegawai'));
    }

    public function update(Request $request, $kodepegawai)
    {
        $request->validate([
            'kodepegawai' => [
                'required',
                'string',
                'max:9',
                Rule::unique('mypegawai', 'kodepegawai')->ignore($kodepegawai, 'kodepegawai'),
            ],
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|max:5',
            'departemen' => 'required|string|max:10',
        ]);

        DB::table('mypegawai')
            ->where('kodepegawai', $kodepegawai)
            ->update([
                'kodepegawai' => $request->kodepegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen,
            ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data mypegawai berhasil diubah.');
    }

    public function destroy($kodepegawai)
    {
        DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->delete();

        return redirect()->route('mypegawai.index')->with('danger', 'Data mypegawai berhasil dihapus.');
    }
}
