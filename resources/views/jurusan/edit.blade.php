<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Jurusan</title>

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

    <a href="{{ action([App\Http\Controllers\JurusanController::class,'index']) }}" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Edit Data Jurusan</h1>

        <form action="{{ route('jurusan.edit', $jurusan->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Jurusan</label>
                <input type="text"
                       name="Nama_Jurusan"
                       value="{{ $jurusan->Nama_Jurusan }}"
                       required>
            </div>

            <div class="form-group">
                <label>Kode Jurusan</label>
                <input type="text"
                       name="Kode_Jurusan"
                       value="{{ $jurusan->Kode_Jurusan }}"
                       required>
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