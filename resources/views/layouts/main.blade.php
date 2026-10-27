<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroClima Kabupaten Garut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <header class="bg-success text-white py-3 shadow-sm">
        <div class="container text-center">
            <h1 class="h3 m-0">AgroClima Kabupaten Garut</h1>
        </div>
    </header>

    @include('partials.navbar')

    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="m-0">&copy; 2026 AgroClima Kelompok Tani Makmur Kabupaten Garut</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>