<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\KrsDetail;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KrsDetailController extends Controller
{
    // Halaman index
    public function index()
    {
        $krsdetail = KrsDetail::with([
            'krs',
            'kelas'
        ])->get();

        return view(
            'krs_detail.index',
            compact('krsdetail')
        );
    }

    // Form create
    public function create()
    {
        $krs = Krs::all();
        $kelas = Kelas::all();

        return view(
            'krs_detail.create',
            compact('krs', 'kelas')
        );
    }

    // Simpan
    public function store(Request $request)
    {
        $request->validate([
            'kode_krs' => 'required',
            'kode_kelas' => 'required',
            'status' => 'required'
        ]);

        KrsDetail::create([
            'kode_krs' => $request->kode_krs,
            'kode_kelas' => $request->kode_kelas,
            'status' => $request->status
        ]);

        return redirect('/krs-detail');
    }

    // Hapus
    public function destroy($id)
    {
        KrsDetail::findOrFail($id)->delete();

        return redirect('/krs-detail');
    }
}