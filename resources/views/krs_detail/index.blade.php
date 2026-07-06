<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KRS Detail</title>

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
            max-width:1300px;
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
            background:#eef5ff;
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

    <h1>📋 Data KRS Detail</h1>

    <a href="/krs-detail/create" class="btn-create">
        + Tambah KRS Detail
    </a>

    <table>

        <thead>

            <tr>
                <th>No</th>
                <th>Kode KRS</th>
                <th>Kode Kelas</th>
                <th>Status</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

        @foreach ($krsdetail as $m)

            <tr>

                <td>{{ $m->id }}</td>

                <td>{{ $m->kode_krs }}</td>

                <td>{{ $m->kelas->kode_kelas }}</td>

                <td>{{ $m->status }}</td>

                <td>{{ $m->created_at }}</td>

                <td>

                    <form action="/krs-detail/{{ $m->id }}" method="POST">

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