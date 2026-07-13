@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Tambah Mata Kuliah
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('matakuliah.save') }}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            Jurusan
                        </label>

                        <input type="text"
                               name="Jurusan"
                               class="form-control"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Kode Mata Kuliah
                        </label>

                        <input type="text"
                               name="KodeMK"
                               class="form-control"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Mata Kuliah
                        </label>

                        <input type="text"
                               name="NamaMK"
                               class="form-control"
                               required>

                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/matakuliah"
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