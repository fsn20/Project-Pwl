@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            Data Mata Kuliah
        </h4>

        <a href="{{ route('matakuliah.add') }}" class="btn btn-success">
            + Tambah Mata Kuliah
        </a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Tanggal Dibuat</th>
                        <th width="170">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($matakuliah as $m)

                    <tr>

                        <td>{{ $m->id }}</td>
                        <td>{{ $m->Jurusan }}</td>
                        <td>{{ $m->KodeMK }}</td>
                        <td>{{ $m->NamaMK }}</td>
                        <td>{{ $m->created_at }}</td>

                        <td>

                            <a href="{{ route('matakuliah.update',$m->id) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('matakuliah.delete',$m->id) }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center">
                            Belum ada data mata kuliah.
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection