<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah KRS Detail</title>

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
            margin-bottom:18px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        input,
        select{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;
        }

        .button-group{
            display:flex;
            gap:15px;
            margin-top:30px;
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

    <a href="/krs-detail" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah KRS Detail</h1>

        <form action="/krs-detail/store" method="POST">

            @csrf

            <div class="form-group">

                <label>KRS</label>

                <select name="kode_krs" required>

                    <option value="">
                        -- Pilih KRS --
                    </option>

                    @foreach($krs as $k)

                    <option value="{{ $k->id }}">
                        KRS {{ $k->id }}
                    </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label>Kelas</label>

                <select name="kode_kelas" required>

                    <option value="">
                        -- Pilih Kelas --
                    </option>

                    @foreach($kelas as $k)

                    <option value="{{ $k->id }}">
                        {{ $k->kode_kelas }}
                    </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">

                <label>Status</label>

                <select name="status">

                    <option value="pending">
                        Pending
                    </option>

                    <option value="approved">
                        Approved
                    </option>

                    <option value="declined">
                        Declined
                    </option>

                </select>

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