<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Sistem Akademik ITBSS</title>

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

        .login-box{

            width:420px;

            background:#fff;

            border-radius:20px;

            padding:40px;

            box-shadow:0 15px 35px rgba(0,0,0,.25);

        }

        .logo{

            font-size:60px;

            color:#0d6efd;

            text-align:center;

            margin-bottom:15px;

        }

        h2{

            text-align:center;

            color:#1e3a8a;

            font-weight:bold;

            margin-bottom:5px;

        }

        p{

            text-align:center;

            color:#777;

            margin-bottom:25px;

        }

        .btn-primary{

            width:100%;

            height:45px;

            font-weight:bold;

            border-radius:10px;

        }

        .form-control{

            border-radius:10px;

            height:45px;

        }

        .register{

            text-align:center;

            margin-top:20px;

        }

        a{

            text-decoration:none;

        }

    </style>

</head>

<body>

<div class="login-box">

    <div class="logo">
        <i class="bi bi-mortarboard-fill"></i>
    </div>

    <h2>Sistem Akademik</h2>

    <p>Silakan login terlebih dahulu</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Masukkan Email">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">

            <label class="form-label">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Masukkan Password">

            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <button class="btn btn-primary">

            <i class="bi bi-box-arrow-in-right"></i>

            Login

        </button>

    </form>

    <div class="register">

        Belum punya akun?

        <a href="{{ route('register.view') }}">

            Register

        </a>

    </div>

</div>

</body>
</html>