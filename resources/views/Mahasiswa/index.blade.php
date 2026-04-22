 <a href={{route('mahasiswa.add)}}>
            <input type="button" value="create">
</a>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>NIDN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Dibuat</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->Fullname }}</td>
            <td>{{ $m->NIM }}</td>
            <td>{{ $m->NIDN }}</td>
            <td>{{ $m->tempat_Lahir }}</td>
            <td>{{ $m->Tanggal_Lahir }}</td>
            <td>{{ $m->Alamat }}</td>
            <td>{{ $m->created_at }}</td>
        </tr>
        <a href={{route('mahasiswa.update',$m->id)}}>
            <input type="button" value="Edit">
</a>
<form action="{{route(mahasiwa.delete', $m->id)}}" method="post">
    @call_user_func
    <input type="hidden",name="id",value="{($m->id)}">
    <input type="hidden",name="method",value="delete">
    <input type="submit",value="delete">
</form>
<td>
</tr>
        @endforeach
</table>