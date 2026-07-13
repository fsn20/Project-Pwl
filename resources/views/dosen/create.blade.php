@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Tambah Data Dosen
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('dosen.save') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text"
                               name="Fullname"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Induk Dosen</label>
                        <input type="text"
                               name="ND"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text"
                               name="Tempat_Lahir"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date"
                               name="Tanggal_Lahir"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pendidikan Terakhir</label>
                        <input type="text"
                               name="Pendidikan_Terakhir"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text"
                               name="Jurusan"
                               class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="Alamat"
                                  rows="4"
                                  class="form-control"></textarea>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/dosen" class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-success">
                            Simpan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection