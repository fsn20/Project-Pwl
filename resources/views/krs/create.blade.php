@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Tambah KRS
                </h4>

            </div>

            <div class="card-body">

                <form action="/krs/store" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            Mahasiswa
                        </label>

                        <select name="kode_mahasiswa"
                                class="form-select"
                                required>

                            <option value="">
                                -- Pilih Mahasiswa --
                            </option>

                            @foreach($mahasiswa as $m)

                                <option value="{{ $m->id }}">
                                    {{ $m->Fullname }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Tahun Ajaran
                        </label>

                        <input type="text"
                               name="tahun_ajaran"
                               class="form-control"
                               placeholder="Contoh: 2026/2027"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label d-block">
                            Semester
                        </label>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input"
                                   type="radio"
                                   name="semester"
                                   value="ganjil"
                                   required>

                            <label class="form-check-label">
                                Ganjil
                            </label>

                        </div>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input"
                                   type="radio"
                                   name="semester"
                                   value="genap">

                            <label class="form-check-label">
                                Genap
                            </label>

                        </div>

                    </div>

                    <div class="mb-3">

                     
                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Total SKS
                        </label>

                        <input type="number"
                               name="total_sks"
                               class="form-control"
                               required>

                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/krs"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                        <div>

                            <button type="reset"
                                    class="btn btn-danger">

                                Reset

                            </button>

                            <button type="submit"
                                    class="btn btn-success">

                                Simpan

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection