@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

        <h4 class="mb-0">

            Data KRS Detail

        </h4>

        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'mahasiswa')

            <a href="/krs-detail/create"
               class="btn btn-success">

                + Tambah KRS Detail

            </a>

        @endif

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>KRS</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Tanggal Dibuat</th>

                        @if(Auth::user()->role != 'mahasiswa')
                            <th width="220">Aksi</th>
                        @endif

                    </tr>

                </thead>

                <tbody>

                @forelse($krsdetail as $m)

                    <tr>

                        <td>{{ $m->id }}</td>

                        <td>KRS #{{ $m->kode_krs }}</td>

                        <td>{{ $m->kelas->kode_kelas }}</td>

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

                                <span class="badge bg-secondary">

                                    {{ ucfirst($m->status) }}

                                </span>

                            @endif

                        </td>

                        <td>{{ $m->created_at }}</td>

                        @if(Auth::user()->role != 'mahasiswa')

                        <td>

                            {{-- ADMIN --}}
                            @if(Auth::user()->role == 'admin')

                                <form action="/krs-detail/{{ $m->id }}"
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

                            @endif

                            {{-- DOSEN --}}
                            @if(Auth::user()->role == 'dosen')

                                @if($m->status == 'pending')

                                    <form action="/krs-detail/{{ $m->id }}/approve"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('PUT')

                                        <button class="btn btn-success btn-sm">

                                            Approve

                                        </button>

                                    </form>

                                    <form action="/krs-detail/{{ $m->id }}/reject"
                                          method="POST"
                                          class="d-inline">

                                        @csrf
                                        @method('PUT')

                                        <button class="btn btn-warning btn-sm">

                                            Reject

                                        </button>

                                    </form>

                                @endif

                            @endif

                        </td>

                        @endif

                    </tr>


                @empty

                    <tr>

                        <td colspan="{{ Auth::user()->role == 'mahasiswa' ? 5 : 6 }}"
                            class="text-center">

                            Belum ada data KRS Detail.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection