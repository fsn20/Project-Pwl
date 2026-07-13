@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            Data Jurusan
        </h4>

        <a href="{{ route('jurusan.add') }}" class="btn btn-success">
            + Tambah Jurusan
        </a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th width="60">No</th>
                        <th>Nama Jurusan</th>
                        <th>Kode Jurusan</th>
                        <th>Tanggal Dibuat</th>
                        <th width="170">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($jurusan as $m)

                    <tr>

                        <td>{{ $m->id }}</td>

                        <td>{{ $m->Nama_Jurusan }}</td>

                        <td>{{ $m->Kode_Jurusan }}</td>

                        <td>{{ $m->created_at }}</td>

                        <td>

                            <a href="{{ route('jurusan.update',$m->id) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('jurusan.delete',$m->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="text-center">
                            Belum ada data jurusan.
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection