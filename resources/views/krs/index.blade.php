@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">

            Data KRS

        </h4>

        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'mahasiswa')

            <a href="/krs/create"
               class="btn btn-success">

                + Tambah KRS

            </a>

        @endif

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Mahasiswa</th>
                        <th>Tahun Ajaran</th>
                        <th>Semester</th>
                        <th>Status</th>
                        <th>Total SKS</th>
                        <th>Tanggal Dibuat</th>

                        @if(Auth::user()->role != 'mahasiswa')
                            <th width="220">Aksi</th>
                        @endif

                    </tr>

                </thead>

                <tbody>

                @forelse($krs as $m)

                    <tr>

                        <td>{{ $m->id }}</td>

                        <td>{{ $m->mahasiswa->Fullname }}</td>

                        <td>{{ $m->tahun_ajaran }}</td>

                        <td>{{ ucfirst($m->semester) }}</td>

                        <td>

                            @if($m->status == 'approved')

                                <span class="badge bg-success">
                                    Approved
                                </span>

                            @elseif($m->status == 'pending')

                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>

                            @elseif($m->status == 'declined')

                                <span class="badge bg-danger">
                                    Declined
                                </span>

                            @else

                                <span class="badge bg-info">
                                    {{ ucfirst($m->status) }}
                                </span>

                            @endif

                        </td>

                        <td>{{ $m->total_sks }}</td>

                        <td>{{ $m->created_at }}</td>

                        @if(Auth::user()->role != 'mahasiswa')

                        <td>

                            @if(Auth::user()->role == 'admin')

                                <form action="/krs/{{ $m->id }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus KRS ini?')">

                                        Delete

                                    </button>

                                </form>

                            @endif

                            @if(Auth::user()->role == 'dosen')

                                <form action="/krs/{{ $m->id }}/approve"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('PUT')

                                    <button class="btn btn-success btn-sm">

                                        Approve

                                    </button>

                                </form>

                                <form action="/krs/{{ $m->id }}/reject"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('PUT')

                                    <button class="btn btn-warning btn-sm">

                                        Reject

                                    </button>

                                </form>

                            @endif

                        </td>

                        @endif

                    </tr>

                @empty

                    <tr>

                        <td colspan="{{ Auth::user()->role == 'mahasiswa' ? 7 : 8 }}"
                            class="text-center">

                            Belum ada data KRS.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection