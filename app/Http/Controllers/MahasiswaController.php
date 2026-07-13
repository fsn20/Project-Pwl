<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswa::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Fullname' => 'required',
            'NIM' => 'required',
            'NIDN' => 'required',
            'Tempat_Lahir' => 'required',
            'Tanggal_Lahir' => 'required',
            'Alamat' => 'required',
        ]);


        Mahasiswa::create([
            'Fullname' => $request->Fullname,
            'NIM' => $request->NIM,
            'NIDN' => $request->NIDN,
            'Tempat_Lahir' => $request->Tempat_Lahir,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Alamat' => $request->Alamat,
        ]);


        return redirect()->action([MahasiswaController::class, 'index'])
            ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.show', [
            'mahasiswa' => $mahasiswa
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => Mahasiswa::findOrFail($id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Fullname' => 'required',
            'NIM' => 'required',
            'NIDN' => 'required',
            'Tempat_Lahir' => 'required',
            'Tanggal_Lahir' => 'required',
            'Alamat' => 'required',
        ]);


        Mahasiswa::findOrFail($id)->update([
            'Fullname' => $request->Fullname,
            'NIM' => $request->NIM,
            'NIDN' => $request->NIDN,
            'Tempat_Lahir' => $request->Tempat_Lahir,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Alamat' => $request->Alamat,
        ]);


        return redirect()->action([MahasiswaController::class, 'index'])
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mahasiswa::findOrFail($id)->delete();


        return redirect()->action([MahasiswaController::class, 'index'])
            ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}