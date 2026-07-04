<a href="/krs/create">
    <input type="button" value="Create">
</a>

<table border="1">
    <thead>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Tahun Ajaran</th>
        <th>Semester</th>
        <th>Status</th>
        <th>Total SKS</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>

    @foreach ($krs as $m)
    <tr>
        <td>{{ $m->id }}</td>

        <td>{{ $m->mahasiswa->Fullname }}</td>

        <td>{{ $m->tahun_ajaran }}</td>

        <td>{{ $m->semester }}</td>

        <td>{{ $m->status }}</td>

        <td>{{ $m->total_sks }}</td>

        <td>{{ $m->created_at }}</td>

        <td>
            <form action="/krs/{{ $m->id }}"
                  method="post">

                @csrf

                <input type="hidden"
                       name="_method"
                       value="DELETE">

                <input type="submit"
                       value="Delete">
            </form>
        </td>
    </tr>
    @endforeach

</table>