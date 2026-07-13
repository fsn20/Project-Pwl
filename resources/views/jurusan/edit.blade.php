@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card shadow">

            <div class="card-header bg-warning text-dark">

                <h4 class="mb-0">
                    Edit Jurusan
                </h4>

            </div>

            <div class="card-body">

                <form action="{{ route('jurusan.edit', $jurusan->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="form-label">
                            Nama Jurusan
                        </label>

                        <input type="text"
                               name="Nama_Jurusan"
                               class="form-control"
                               value="{{ $jurusan->Nama_Jurusan }}"
                               required>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Kode Jurusan
                        </label>

                        <input type="text"
                               name="Kode_Jurusan"
                               class="form-control"
                               value="{{ $jurusan->Kode_Jurusan }}"
                               required>

                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/jurusan"
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