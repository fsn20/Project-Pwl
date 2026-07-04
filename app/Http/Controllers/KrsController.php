<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    // Halaman index
    public function index()
    {
        $krs = Krs::with('mahasiswa')->get();

        return view('krs.index', compact('krs'));
    }

    // Form create
    public function create()
    {
        $mahasiswa = Mahasiswa::all();

        return view('krs.create', compact('mahasiswa'));
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'kode_mahasiswa' => 'required',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
            'status' => 'required',
            'total_sks' => 'required'
        ]);

        Krs::create([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester,
            'status' => $request->status,
            'total_sks' => $request->total_sks
        ]);

        return redirect('/krs');
    }

    // Hapus
    public function destroy($id)
    {
        Krs::findOrFail($id)->delete();

        return redirect('/krs');
    }
}