@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card shadow">

            <div class="card-header bg-warning text-dark">

                <h4 class="mb-0">
                    Edit Mata Kuliah
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('matakuliah.edit', $matakuliah->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label">
                            Jurusan
                        </label>

                        <input type="text"
                               name="Jurusan"
                               class="form-control"
                               value="{{ $matakuliah->Jurusan }}"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Kode Mata Kuliah
                        </label>

                        <input type="text"
                               name="KodeMK"
                               class="form-control"
                               value="{{ $matakuliah->KodeMK }}"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Mata Kuliah
                        </label>

                        <input type="text"
                               name="NamaMK"
                               class="form-control"
                               value="{{ $matakuliah->NamaMK }}"
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
                                    class="btn btn-warning">

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