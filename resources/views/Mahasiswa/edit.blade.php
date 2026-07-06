<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            width:700px;
            margin:auto;
        }

        .card{
            background:white;
            border-radius:12px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
            padding:30px;
        }

        h1{
            text-align:center;
            color:#1e3a8a;
            margin-bottom:30px;
        }

        table{
            width:100%;
        }

        td{
            padding:12px;
            vertical-align:top;
        }

        input[type=text],
        input[type=date],
        textarea{

            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;

        }

        textarea{
            resize:vertical;
            height:100px;
        }

        .button-group{
            margin-top:20px;
            text-align:center;
        }

        .btn-update{

            background:#16a34a;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            margin-right:10px;

        }

        .btn-update:hover{

            background:#15803d;

        }

        .btn-reset{

            background:#f59e0b;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            margin-right:10px;

        }

        .btn-reset:hover{

            background:#d97706;

        }

        .btn-back{

            background:#2563eb;
            color:white;
            text-decoration:none;
            padding:10px 20px;
            border-radius:8px;

        }

        .btn-back:hover{

            background:#1d4ed8;

        }

    </style>

</head>

<body>

<div class="container">

<div class="card">

<h1>Edit Mahasiswa</h1>

<form action="{{ route('mahasiswa.edit', $mahasiswa->id) }}" method="POST">

    @csrf
    <input type="hidden" name="_method" value="PUT">

    <table>

        <tr>
            <td width="220">Nama Lengkap</td>
            <td>
                <input type="text" name="Fullname" value="{{ $mahasiswa->Fullname }}">
            </td>
        </tr>

        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>
                <input type="text" name="NIM" value="{{ $mahasiswa->NIM }}">
            </td>
        </tr>

        <tr>
            <td>Nomor Induk Siswa Nasional</td>
            <td>
                <input type="text" name="NISN" value="{{ $mahasiswa->NISN }}">
            </td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>
                <input type="text" name="Tempat_Lahir" value="{{ $mahasiswa->Tempat_Lahir }}">
            </td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <input type="date" name="Tanggal_Lahir" value="{{ $mahasiswa->Tanggal_Lahir }}">
            </td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="Alamat">{{ $mahasiswa->Alamat }}</textarea>
            </td>
        </tr>

    </table>

    <div class="button-group">

        <button type="submit" class="btn-update">
            Update
        </button>

        <button type="reset" class="btn-reset">
            Reset
        </button>

        <a href="{{ url('/mahasiswa') }}" class="btn-back">
            Kembali
        </a>

    </div>

</form>

</div>

</div>

</body>
</html>