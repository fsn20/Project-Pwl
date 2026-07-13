@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow">

            <div class="card-header bg-warning text-dark">

                <h4 class="mb-0">
                    Edit Data Dosen
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('dosen.edit', $dosen->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text"
                               name="Fullname"
                               class="form-control"
                               value="{{ $dosen->Fullname }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Dosen</label>
                        <input type="text"
                               name="ND"
                               class="form-control"
                               value="{{ $dosen->ND }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text"
                               name="Tempat_Lahir"
                               class="form-control"
                               value="{{ $dosen->Tempat_Lahir }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date"
                               name="Tanggal_Lahir"
                               class="form-control"
                               value="{{ $dosen->Tanggal_Lahir }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pendidikan Terakhir</label>
                        <input type="text"
                               name="Pendidikan_Terakhir"
                               class="form-control"
                               value="{{ $dosen->Pendidikan_Terakhir }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text"
                               name="Jurusan"
                               class="form-control"
                               value="{{ $dosen->Jurusan }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="Alamat"
                                  class="form-control"
                                  rows="4">{{ $dosen->Alamat }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/dosen" class="btn btn-secondary">
                            Kembali
                        </a>

                        <div>

                            <button type="reset" class="btn btn-danger">
                                Reset
                            </button>

                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection