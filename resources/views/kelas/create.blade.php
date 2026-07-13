@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Tambah Data Kelas
                </h4>

            </div>

            <div class="card-body">

                <form action="/kelas/store" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            Kode Kelas
                        </label>

                        <input type="text"
                               name="kode_kelas"
                               class="form-control"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Mata Kuliah
                        </label>

                        <select name="kode_mata_kuliah"
                                class="form-select"
                                required>

                            <option value="">
                                -- Pilih Mata Kuliah --
                            </option>

                            @foreach($matakuliah as $m)

                                <option value="{{ $m->id }}">
                                    {{ $m->NamaMK }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Dosen
                        </label>

                        <select name="kode_dosen"
                                class="form-select"
                                required>

                            <option value="">
                                -- Pilih Dosen --
                            </option>

                            @foreach($dosen as $d)

                                <option value="{{ $d->id }}">
                                    {{ $d->Fullname }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Hari
                            </label>

                            <select name="hari"
                                    class="form-select">

                                <option value="senin">Senin</option>
                                <option value="selasa">Selasa</option>
                                <option value="rabu">Rabu</option>
                                <option value="kamis">Kamis</option>
                                <option value="jumat">Jumat</option>

                            </select>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Jam
                            </label>

                            <select name="jam"
                                    class="form-select">

                                <option value="08:00 - 09:40">08:00 - 09:40</option>
                                <option value="09:50 - 11:30">09:50 - 11:30</option>
                                <option value="12:30 - 14:10">12:30 - 14:10</option>
                                <option value="17:00 - 18:40">17:00 - 18:40</option>
                                <option value="19:00 - 20:40">19:00 - 20:40</option>

                            </select>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Tahun Ajaran
                            </label>

                            <input type="text"
                                   name="tahun_ajaran"
                                   class="form-control"
                                   placeholder="2026/2027">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label class="form-label">
                                Ruang Kelas
                            </label>

                            <input type="text"
                                   name="ruang_kelas"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Jumlah Maksimal Mahasiswa
                        </label>

                        <input type="number"
                               name="jumlah_max"
                               class="form-control">

                    </div>

                    <div class="mb-4">

                        <label class="form-label d-block">
                            Semester
                        </label>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input"
                                   type="radio"
                                   name="semester"
                                   value="ganjil">

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

                    <div class="d-flex justify-content-between">

                        <a href="/kelas"
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