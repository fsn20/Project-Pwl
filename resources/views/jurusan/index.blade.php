<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>

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
            max-width:1000px;
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
            margin-bottom:8px;
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

    <h1>📚 Data Jurusan</h1>

    <a href="{{ route('jurusan.add') }}" class="btn-create">
        + Tambah Jurusan
    </a>

    <table>

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Kode Jurusan</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        @foreach($jurusan as $m)

        <tr>

            <td>{{ $m->id }}</td>
            <td>{{ $m->Nama_Jurusan }}</td>
            <td>{{ $m->Kode_Jurusan }}</td>
            <td>{{ $m->created_at }}</td>

            <td>

                <a href="{{ route('jurusan.update',$m->id) }}" class="btn-edit">
                    Edit
                </a>

                <form action="{{ route('jurusan.delete',$m->id) }}" method="POST" style="margin-top:8px;">

                    @csrf
                    @method('DELETE')

                    <button class="btn-delete">
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