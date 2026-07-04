<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#0d6efd,#6ea8fe);
            height:100vh;
        }

        .register-card{
            width:100%;
            max-width:460px;
            border:none;
            border-radius:15px;
        }

        .logo{
            width:90px;
            display:block;
            margin:auto;
        }

        .form-control{
            border-radius:10px;
        }

        .btn-register{
            border-radius:10px;
        }

        .card{
            box-shadow:0 10px 25px rgba(0,0,0,.2);
        }
    </style>

</head>
<body>

<div class="container h-100">

    <div class="row justify-content-center align-items-center h-100">

        <div class="col-md-6">

            <div class="card register-card">

                <div class="card-body p-4">

                    <img src="{{ asset('images/ITB-SS.jpg') }}" class="logo mb-3">

                    <h3 class="text-center fw-bold">
                        Register
                    </h3>

                    <p class="text-center text-muted mb-4">
                        Buat akun baru untuk mengakses Sistem Informasi Akademik
                    </p>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input
                                type="text"
                                class="form-control"
                                name="name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                name="email"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Konfirmasi Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-success w-100 btn-register">

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

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>