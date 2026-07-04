<a href={{route('matakuliah.add')}}>
                <input type="button" value="Create">
            </a>
<table border="1">
    <thead>
        <th>No</th>
        <th>Jurusan</th>
        <th>Kode Mata Kuliah</th>
        <th>Nama Mata Kuliah</th>
        <th>Aksi</th>
    </thead>
   @foreach($mata_kuliah as $mk)
<tr>
    <td>{{$mk->id}}</td>
    <td>{{$mk->Jurusan}}</td>
    <td>{{$mk->KodeMK}}</td>
    <td>{{$mk->NamaMK}}</td>
    <td>
        <a href="{{ route('matakuliah.update',$mk->id) }}">
            <input type="button" value="Edit">
        </a>

        <form action="{{ route('matakuliah.delete',$mk->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Delete">
        </form>
    </td>
</tr>
@endforeach