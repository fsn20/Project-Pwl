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
            'total_sks' => 'required'
        ]);

        Krs::create([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran' => $request->tahun_ajaran,
            'semester' => $request->semester,
            'status' => 'pending',
            'total_sks' => $request->total_sks
        ]);

        return redirect('/krs')
            ->with('success', 'Data KRS berhasil ditambahkan.');
    }

    // Approve KRS
    public function approve($id)
    {
        $krs = Krs::findOrFail($id);

        $krs->status = 'approved';
        $krs->save();

        return redirect('/krs')
            ->with('success', 'KRS berhasil di-approve.');
    }

    // Reject KRS
    public function reject($id)
    {
        $krs = Krs::findOrFail($id);

        $krs->status = 'declined';
        $krs->save();

        return redirect('/krs')
            ->with('success', 'KRS berhasil di-reject.');
    }

    // Hapus
    public function destroy($id)
    {
        Krs::findOrFail($id)->delete();

        return redirect('/krs')
            ->with('success', 'Data KRS berhasil dihapus.');
    }
}