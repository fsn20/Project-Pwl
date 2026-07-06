<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mata Kuliah</title>

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
            max-width:700px;
            margin:auto;
        }

        .card{
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        h1{
            text-align:center;
            color:#1e3a8a;
            margin-bottom:25px;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;
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
            background:#2563eb;
            color:white;
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

    <a href="{{ action([App\Http\Controllers\MatakuliahController::class,'index']) }}" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah Data Mata Kuliah</h1>

        <form action="{{ route('matakuliah.save') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="Jurusan" required>
            </div>

            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" name="KodeMK" required>
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input type="text" name="NamaMK" required>
            </div>

            <div class="button-group">

                <button type="submit" class="btn-save">
                    Simpan
                </button>

                <button type="reset" class="btn-reset">
                    Reset
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>