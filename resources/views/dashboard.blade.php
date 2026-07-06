@extends('layouts.app')

@section('content')

<!-- 🔥 PRO FULL BANNER -->
<div class="banner-wrapper">
    <img src="{{ asset('images/Website-PMB-26-27.jpg') }}" class="banner">
</div>

<div class="container py-4">

    <!-- WELCOME -->
    <div class="welcome-card">

        <div class="row align-items-center">

            <div class="col-md-8">
                <h2>👋 Selamat Datang</h2>
                <p>
                    Sistem Informasi Akademik ITBSS untuk mengelola data mahasiswa,
                    dosen, jurusan, mata kuliah, kelas, dan KRS.
                </p>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('images/Logo-ITBSS.png') }}" width="120">
            </div>

        </div>

    </div>

    <!-- MENU -->
    <div class="row row-cols-1 row-cols-md-3 g-3 mt-3">

        <div class="col">
            <a href="/mahasiswa" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-people-fill"></i>
                    <h4>Mahasiswa</h4>
                    <p>Kelola data mahasiswa</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="/dosen" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-person-badge"></i>
                    <h4>Dosen</h4>
                    <p>Kelola data dosen</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="/jurusan" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-building"></i>
                    <h4>Jurusan</h4>
                    <p>Kelola data jurusan</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="/matakuliah" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-book"></i>
                    <h4>Mata Kuliah</h4>
                    <p>Kelola mata kuliah</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="/kelas" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-grid-3x3-gap"></i>
                    <h4>Kelas</h4>
                    <p>Kelola kelas</p>
                </div>
            </a>
        </div>

        <div class="col">
            <a href="/krs" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4>KRS</h4>
                    <p>Kelola KRS</p>
                </div>
            </a>
        </div>

    </div>

</div>

@endsection