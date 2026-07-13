@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold">
            Data Mahasiswa
        </h2>

        <p class="text-muted mb-0">
            Kelola seluruh data mahasiswa.
        </p>

    </div>

    <a href="{{ route('mahasiswa.add') }}"
       class="btn btn-success">

        + Tambah Mahasiswa

    </a>

</div>

<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-primary">

                <tr>

                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>NISN</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Dibuat</th>
                    <th width="180">Aksi</th>

                </tr>

                </thead>

                <tbody>

                @forelse($mahasiswa as $m)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $m->Fullname }}</td>

                    <td>{{ $m->NIM }}</td>

                    <td>{{ $m->NISN }}</td>

                    <td>{{ $m->Tempat_Lahir }}</td>

                    <td>{{ $m->Tanggal_Lahir }}</td>

                    <td>{{ $m->Alamat }}</td>

                    <td>{{ $m->created_at->format('d-m-Y') }}</td>

                    <td>

                        <a href="{{ route('mahasiswa.update',$m->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <form
                            action="{{ route('mahasiswa.delete',$m->id) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="9"
                        class="text-center">

                        Belum ada data mahasiswa.

                    </td>

                </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection