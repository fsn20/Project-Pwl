<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik ITBSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-primary shadow">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold" href="/">
            <i class="bi bi-mortarboard-fill me-2"></i>
            Sistem Akademik ITBSS
        </a>

        <!-- MENU -->
        <div class="d-flex gap-2 align-items-center">

            <a href="/" class="btn btn-light btn-sm">
                Dashboard
            </a>

            <!-- LOGIN / REGISTER / LOGOUT -->
            @guest
                <a href="/login" class="btn btn-outline-light btn-sm">
                    Login
                </a>

                <a href="/register" class="btn btn-warning btn-sm">
                    Register
                </a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        Logout
                    </button>
                </form>
            @endauth

        </div>

    </div>
</nav>

<!-- CONTENT -->
<div class="container py-4">
    @yield('content')
</div>

</body>
</html>