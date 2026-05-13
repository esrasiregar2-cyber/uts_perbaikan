<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f5f6fa;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                Sistem E-Bengkel
            </a>

            <a href="/kendaraan" class="btn btn-light">
                Data Kendaraan
            </a>
        </div>
    </nav>

    <div class="container mt-5">

        <div class="card shadow border-0">
            <div class="card-body">

                @yield('content')

            </div>
        </div>

    </div>

</body>
</html>