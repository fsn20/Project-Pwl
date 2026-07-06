<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>

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
            max-width:750px;
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
            margin-bottom:25px;
        }

        .form-group{
            margin-bottom:18px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        input,
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
            display:flex;
            gap:15px;
            margin-top:25px;
        }

        .btn-save{
            flex:1;
            background:#16a34a;
            color:white;
            border:none;
            padding:12px;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:bold;
        }

        .btn-save:hover{
            background:#15803d;
        }

        .btn-reset{
            flex:1;
            background:#dc2626;
            color:white;
            border:none;
            padding:12px;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:bold;
        }

        .btn-reset:hover{
            background:#b91c1c;
        }

        .btn-back{
            display:inline-block;
            margin-bottom:20px;
            text-decoration:none;
            color:white;
            background:#2563eb;
            padding:10px 18px;
            border-radius:8px;
        }

        .btn-back:hover{
            background:#1d4ed8;
        }

    </style>

</head>
<body>

<div class="container">

    <a href="{{ action([App\Http\Controllers\DosenController::class,'index']) }}" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah Data Dosen</h1>

        <form action="{{ route('dosen.save') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="Fullname" required>
            </div>

            <div class="form-group">
                <label>Nomor Dosen</label>
                <input type="text" name="ND" required>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="Tempat_Lahir" required>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="Tanggal_Lahir" required>
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <input type="text" name="Pendidikan_Terakhir" required>
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="Jurusan" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="Alamat" required></textarea>
            </div>

            <div class="button-group">
                <button type="submit" class="btn-save">Simpan</button>
                <button type="reset" class="btn-reset">Reset</button>
            </div>

        </form>

    </div>

</div>

</body>
</html>