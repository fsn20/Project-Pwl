@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow">

            <div class="card-header bg-warning">

                <h4 class="mb-0">
                    Edit Mahasiswa
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('mahasiswa.edit', $mahasiswa->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            name="Fullname"
                            class="form-control"
                            value="{{ $mahasiswa->Fullname }}"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            NIM
                        </label>

                        <input
                            type="text"
                            name="NIM"
                            class="form-control"
                            value="{{ $mahasiswa->NIM }}"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            NISN
                        </label>

                        <input
                            type="text"
                            name="NISN"
                            class="form-control"
                            value="{{ $mahasiswa->NISN }}"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tempat Lahir
                        </label>

                        <input
                            type="text"
                            name="Tempat_Lahir"
                            class="form-control"
                            value="{{ $mahasiswa->Tempat_Lahir }}"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tanggal Lahir
                        </label>

                        <input
                            type="date"
                            name="Tanggal_Lahir"
                            class="form-control"
                            value="{{ $mahasiswa->Tanggal_Lahir }}"
                            required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Alamat
                        </label>

                        <textarea
                            name="Alamat"
                            rows="4"
                            class="form-control"
                            required>{{ $mahasiswa->Alamat }}</textarea>

                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/mahasiswa"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                        <button
                            type="submit"
                            class="btn btn-warning">

                            Update Data

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection