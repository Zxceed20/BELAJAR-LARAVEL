<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documen - @yield('content-title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3-dist\css\bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row g-0">
        <div class="col-md-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="min-height: 100vh;">
            <a class="d-flex align-items-center text-white text-decoration-none mb-1" href="#">
                <i class="bi bi-apple me-2 mt-1"></i>
                <span class="fw-bold fs-4">APPLE ADMIN</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mt-1">
                <li><a href="/Mdashboard" class="nav-link text-white"><i class="bi bi-bank me-2"></i>HOME</a></li>
                <li><a href="/Mproject" class="nav-link text-white"><i class="bi bi-pc-display-horizontal me-2"></i>MASTER PROJECT</a></li>
                <li><a href="/Mservice" class="nav-link active text-white"><i class="bi bi-hammer me-2"></i>MASTER SERVICE</a></li>
            </ul>
            <hr>
            <div class="dropdown">
                <a class="d-flex align-items-center dropdown-toggle text-decoration-none text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-9">
            <div class="row">
                @yield('service')
            </div>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist\bootstrap-5.3.3-dist\js\bootstrap.js"></script>
</body>
</html>