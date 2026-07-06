<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:30px;
        }

        .container{
            max-width:1400px;
            margin:auto;
        }

        h1{
            color:#1e3a8a;
            margin-bottom:20px;
        }

        .btn-create{
            display:inline-block;
            text-decoration:none;
            background:#16a34a;
            color:white;
            padding:10px 18px;
            border-radius:8px;
            margin-bottom:20px;
            font-weight:bold;
            transition:.3s;
        }

        .btn-create:hover{
            background:#15803d;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
            border-radius:10px;
            overflow:hidden;
        }

        th{
            background:#1e3a8a;
            color:white;
            padding:14px;
        }

        td{
            padding:12px;
            text-align:center;
            border-bottom:1px solid #ddd;
        }

        tr:hover{
            background:#f1f5f9;
        }

        .btn-edit{
            background:#f59e0b;
            color:white;
            text-decoration:none;
            padding:8px 15px;
            border-radius:6px;
            display:inline-block;
            margin-bottom:5px;
        }

        .btn-edit:hover{
            background:#d97706;
        }

        .btn-delete{
            background:#dc2626;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:6px;
            cursor:pointer;
        }

        .btn-delete:hover{
            background:#b91c1c;
        }

    </style>

</head>

<body>

<div class="container">

<h1>👨‍🏫 Data Dosen</h1>

<a href="{{ route('dosen.add') }}" class="btn-create">
    + Tambah Dosen
</a>

<table>

    <thead>

        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Nomor Dosen</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan Terakhir</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>

    </thead>

    <tbody>

    @foreach($dosen as $m)

        <tr>

            <td>{{ $m->id }}</td>
            <td>{{ $m->Fullname }}</td>
            <td>{{ $m->ND }}</td>
            <td>{{ $m->Tempat_Lahir }}</td>
            <td>{{ $m->Tanggal_Lahir }}</td>
            <td>{{ $m->Pendidikan_Terakhir }}</td>
            <td>{{ $m->Jurusan }}</td>
            <td>{{ $m->Alamat }}</td>
            <td>{{ $m->created_at }}</td>

            <td>

                <a href="{{ route('dosen.update', $m->id) }}" class="btn-edit">
                    Edit
                </a>

                <form action="{{ route('dosen.delete', $m->id) }}" method="POST" style="margin-top:8px;">

                    @csrf
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn-delete">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

</div>

</body>
</html>