@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold">Data Dosen</h2>
        <p class="text-muted mb-0">
            Kelola seluruh data dosen.
        </p>
    </div>

    <a href="{{ route('dosen.add') }}" class="btn btn-success">
        + Tambah Dosen
    </a>

</div>

<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-primary">

                    <tr>

                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Nomor Dosen</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Dibuat</th>
                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($dosen as $d)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $d->Fullname }}</td>

                        <td>{{ $d->ND }}</td>

                        <td>{{ $d->Tempat_Lahir }}</td>

                        <td>{{ $d->Tanggal_Lahir }}</td>

                        <td>{{ $d->Pendidikan_Terakhir }}</td>

                        <td>{{ $d->Jurusan }}</td>

                        <td>{{ $d->Alamat }}</td>

                        <td>{{ $d->created_at->format('d-m-Y') }}</td>

                        <td>

                            <a href="{{ route('dosen.update',$d->id) }}"
                               class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form
                                action="{{ route('dosen.delete',$d->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data dosen ini?')">

                                    Delete

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="10" class="text-center">

                            Belum ada data dosen.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection