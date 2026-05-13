<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem E-Bengkel</a>

            <div>
                <a href="/kendaraan" class="btn btn-light">
                    Daftar Servis
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>