@extends('layouts.app')

@section('content')

<div class="row justify-content-center">

    <div class="col-lg-7">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h4 class="mb-0">
                    Tambah KRS Detail
                </h4>

            </div>

            <div class="card-body">

                <form action="/krs-detail/store" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label class="form-label">
                            KRS
                        </label>

                        <select name="kode_krs"
                                class="form-select"
                                required>

                            <option value="">
                                -- Pilih KRS --
                            </option>

                            @foreach($krs as $k)

                                <option value="{{ $k->id }}">
                                    KRS #{{ $k->id }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Kelas
                        </label>

                        <select name="kode_kelas"
                                class="form-select"
                                required>

                            <option value="">
                                -- Pilih Kelas --
                            </option>

                            @foreach($kelas as $k)

                                <option value="{{ $k->id }}">
                                    {{ $k->kode_kelas }}
                                </option>

                            @endforeach

                        </select>

                    </div>


                    <div class="d-flex justify-content-between">

                        <a href="/krs-detail"
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