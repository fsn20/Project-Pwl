<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik ITBSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
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

            <!-- Tombol Dark Mode -->
            <button id="themeToggle" class="btn btn-outline-light btn-sm">
                🌙 Dark Mode
            </button>

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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Dark Mode -->
<script>
const themeToggle = document.getElementById('themeToggle');

// Saat halaman dibuka
if(localStorage.getItem('theme') === 'dark'){
    document.body.classList.add('dark-mode');
    themeToggle.innerHTML = '☀️ Light Mode';
}

// Saat tombol diklik
themeToggle.addEventListener('click', function(){

    document.body.classList.toggle('dark-mode');

    if(document.body.classList.contains('dark-mode')){
        localStorage.setItem('theme','dark');
        themeToggle.innerHTML='☀️ Light Mode';
    }else{
        localStorage.setItem('theme','light');
        themeToggle.innerHTML='🌙 Dark Mode';
    }

});
</script>

</body>
</html>