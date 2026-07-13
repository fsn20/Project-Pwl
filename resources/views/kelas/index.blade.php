@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">
            Data Kelas
        </h4>

        <a href="/kelas/create"
           class="btn btn-success">

            + Tambah Kelas

        </a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Kode Kelas</th>
                        <th>Dosen</th>
                        <th>Mata Kuliah</th>
                        <th>Ruang</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Tahun Ajaran</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($kelas as $m)

                    <tr>

                        <td>{{ $m->id }}</td>

                        <td>{{ $m->kode_kelas }}</td>

                        <td>{{ $m->dosen->Fullname }}</td>

                        <td>{{ $m->matakuliah->NamaMK }}</td>

                        <td>{{ $m->ruang_kelas }}</td>

                        <td>{{ ucfirst($m->hari) }}</td>

                        <td>{{ $m->jam }}</td>

                        <td>{{ $m->tahun_ajaran }}</td>

                        <td>

                            <form action="/kelas/{{ $m->id }}"
                                  method="POST"
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kelas ini?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="9"
                            class="text-center">

                            Belum ada data kelas.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection