<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kelas</title>

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

        .radio-group{
            display:flex;
            gap:25px;
            margin-top:10px;
        }

        .radio-group label{
            display:flex;
            align-items:center;
            gap:6px;
            font-weight:normal;
        }

        .radio-group input{
            width:auto;
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

    <a href="/kelas" class="btn-back">
        ← Kembali
    </a>

    <div class="card">

        <h1>Tambah Data Kelas</h1>

        <form action="/kelas/store" method="POST">

            @csrf

            <div class="form-group">
                <label>Kode Kelas</label>
                <input type="text" name="kode_kelas" required>
            </div>

            <div class="form-group">
                <label>Mata Kuliah</label>

                <select name="kode_mata_kuliah" required>

                    <option value="">
                        -- Pilih Mata Kuliah --
                    </option>

                    @foreach($matakuliah as $m)
                        <option value="{{ $m->id }}">
                            {{ $m->NamaMK }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label>Dosen</label>

                <select name="kode_dosen" required>

                    <option value="">
                        -- Pilih Dosen --
                    </option>

                    @foreach($dosen as $d)
                        <option value="{{ $d->id }}">
                            {{ $d->Fullname }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label>Hari</label>

                <select name="hari">

                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jumat">Jumat</option>

                </select>
            </div>

            <div class="form-group">
                <label>Jam</label>

                <select name="jam">

                    <option value="08:00 - 09:40">08:00 - 09:40</option>

                    <option value="09:50 - 11:30">09:50 - 11:30</option>

                    <option value="12:30 - 14:10">12:30 - 14:10</option>

                    <option value="17:00 - 18:40">17:00 - 18:40</option>

                    <option value="19:00 - 20:40">19:00 - 20:40</option>

                </select>
            </div>

            <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="text" name="tahun_ajaran" required>
            </div>

            <div class="form-group">
                <label>Ruang Kelas</label>
                <input type="text" name="ruang_kelas" required>
            </div>

            <div class="form-group">
                <label>Jumlah Maksimal Mahasiswa</label>
                <input type="number" name="jumlah_max" required>
            </div>

            <div class="form-group">

                <label>Semester</label>

                <div class="radio-group">

                    <label>
                        <input type="radio" name="semester" value="ganjil" required>
                        Ganjil
                    </label>

                    <label>
                        <input type="radio" name="semester" value="genap">
                        Genap
                    </label>

                </div>

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