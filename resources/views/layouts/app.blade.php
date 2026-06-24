<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Css/gaya.css') }}">
    
    <!-- Bootstrap CSS local -->
    {{-- <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">  --}}

    <title>NATURAL</title>
<style>
        body {
            background-image: url('/gambar/Background.png');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
    </style>

</head>
<body>
    <!-- Navbar --> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-white">
        <div class="container">
            <a class="navbar-brand text-success fw-bold fs-4" href="/">
                <img src="{{ asset('gambar/logo.png') }}" alt= "Logo" height="40" class="me-2">NATURAL</a>
            <!-- Tombol Strip -->
            <button class="navbar-toggler border-success" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span style="color: green; font-size: 24px; ">&#9776;</span>
        </button>

        <!-- Menu --> 
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="/Project">Project</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('artikel.index') }}">Artikel</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-dark" href="/about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark" href="/contact">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link text-success fw-bold">
                        Login
                    </a>
                </li>
            </ul>   
        </div>


        </div>

    </nav>

    <!-- Konten -->
    <div class="container mt-4" style="background-image:url('{{ asset('gambar/Bg.png') }}');
    background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        min-height: 100vh; ">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer style="background-color: #226833;" class=" text-white mt-5 py-4">
        <div class="container">
            <div class="row">

                <!-- Kiri: Info Perusahaan -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold" > <img src="{{ asset('gambar/logo.png') }}" alt= "Logo" height="40" class="me-2">Natural</h5>
                    <p class="text-white-50">
                        Sistem Informasi Pengadaan Lahan dan Properti
                    </p>
                </div>

                <!-- Tengah: Menu -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white-50 text-decoration-none">Home</a></li>
                        <li><a href="/Project" class="text-white-50 text-decoration-none">Project</a></li>
                        <li><a href="/artikel" class="text-white-50 text-decoration-none">Artikel</a></li>
                        <li><a href="/about" class="text-white-50 text-decoration-none">About</a></li>
                        <li><a href="/contact" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>

                <!-- Kanan: Kontak -->
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Kontak</h5>
                    <p class="text-white-50">
                        📍 Tangerang, Banten<br>
                        📞 021-1234567<br>
                        📧 info@ptnatural.com
                    </p>
                </div>

            </div>

            <!-- Copyright -->
            <hr class="border-white-50">
            <p class="text-center text-white-50 mb-0">
                © 2026 Natural Land & Property. By Nabil Ibtihal
            </p>

        </div>
    </footer>

   

<!-- Bootstrap JS -->
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>