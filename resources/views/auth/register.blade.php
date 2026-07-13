<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Sistem Akademik ITBSS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background:linear-gradient(135deg,#0d6efd,#1e3a8a);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial, Helvetica, sans-serif;
        }

        .register-box{

            width:450px;

            background:white;

            border-radius:20px;

            padding:40px;

            box-shadow:0 15px 35px rgba(0,0,0,.25);

        }

        .logo{

            text-align:center;

            font-size:60px;

            color:#0d6efd;

            margin-bottom:10px;

        }

        h2{

            text-align:center;

            color:#1e3a8a;

            font-weight:bold;

        }

        p{

            text-align:center;

            color:#777;

            margin-bottom:25px;

        }

        .form-control{

            height:45px;

            border-radius:10px;

        }

        .btn-success{

            width:100%;

            height:45px;

            border-radius:10px;

            font-weight:bold;

        }

        a{

            text-decoration:none;

        }

    </style>

</head>

<body>

<div class="register-box">

    <div class="logo">

        <i class="bi bi-person-plus-fill"></i>

    </div>

    <h2>Register</h2>

    <p>Buat akun baru</p>

    <form action="{{ route('register') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Nama Lengkap</label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="form-control @error('name') is-invalid @enderror">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror">

            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Password</label>

            <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror">

            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="mb-3">

            <label>Konfirmasi Password</label>

            <input
                type="password"
                name="password_confirmation"
                class="form-control">

        </div>

        <button class="btn btn-success">

            <i class="bi bi-person-check-fill"></i>

            Register

        </button>

    </form>

    <hr>

    <div class="text-center">

        Sudah punya akun?

        <a href="{{ route('login') }}">

            Login

        </a>

    </div>

</div>

</body>
</html>