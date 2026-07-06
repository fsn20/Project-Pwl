<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>

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
            margin-bottom:18px;
        }

        label{
            display:block;
            font-weight:bold;
            margin-bottom:8px;
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

        .btn-update{
            flex:1;
            background:#f59e0b;
            color:white;
            border:none;
            padding:12px;
            border-radius:8px;
            cursor:pointer;
            font-size:15px;
            font-weight:bold;
        }

        .btn-update:hover{
            background:#d97706;
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

    <a href="{{ action([App\Http\Controllers\DosenController::class,'index']) }}" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Edit Data Dosen</h1>

        <form action="{{ route('dosen.edit', $dosen->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="Fullname" value="{{ $dosen->Fullname }}" required>
            </div>

            <div class="form-group">
                <label>Nomor Dosen</label>
                <input type="text" name="ND" value="{{ $dosen->ND }}" required>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="Tempat_Lahir" value="{{ $dosen->Tempat_Lahir }}" required>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="Tanggal_Lahir" value="{{ $dosen->Tanggal_Lahir }}" required>
            </div>

            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <input type="text" name="Pendidikan_Terakhir" value="{{ $dosen->Pendidikan_Terakhir }}" required>
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="Jurusan" value="{{ $dosen->Jurusan }}" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="Alamat" required>{{ $dosen->Alamat }}</textarea>
            </div>

            <div class="button-group">

                <button type="submit" class="btn-update">
                    Update
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