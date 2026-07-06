<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Jurusan</title>

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
            max-width:650px;
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
            margin-bottom:20px;
        }

        label{
            display:block;
            font-weight:bold;
            margin-bottom:8px;
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

    <a href="{{ action([App\Http\Controllers\JurusanController::class,'index']) }}" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah Data Jurusan</h1>

        <form action="{{ route('jurusan.save') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Nama Jurusan</label>
                <input type="text" name="Nama_Jurusan" required>
            </div>

            <div class="form-group">
                <label>Kode Jurusan</label>
                <input type="text" name="Kode_Jurusan" required>
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