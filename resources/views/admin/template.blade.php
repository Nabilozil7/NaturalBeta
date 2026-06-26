<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title','Admin Natural Land')</title>

<link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
body{
    background:#f8f9fa;
}

/* SIDEBAR DESKTOP */
.sidebar{
    width:240px;
    min-height:100vh;
    background:#343a40;
    position:fixed;
    top:56px;
    left:0;
    padding-top:10px;
}

.sidebar a{
    display:block;
    color:#fff;
    padding:12px 18px;
    text-decoration:none;
    font-size:14px;
}

.sidebar a:hover{
    background:#05c344;
}

/* CONTENT */
.content{
    margin-left:240px;
    margin-top:70px;
    padding:20px;
}

/* NAVBAR */
.navbar-brand{
    font-weight:700;
    color:#2b9b09 !important;
}

/* RESPONSIVE */
@media (max-width: 992px){
    .sidebar{
        display:none;
    }

    .content{
        margin-left:0;
        padding:15px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-light bg-white fixed-top shadow-sm">
    <div class="container-fluid">

        <!-- Hamburger -->
        <button class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="bi bi-list fs-3"></i>
        </button>

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('gambar/logo.png') }}" width="40" class="me-2">
            NATURAL ADMIN
        </a>

        <!-- Right -->
        <div class="dropdown">
            @php
                $user = \App\Models\User::find(session('user_id'));
            @endphp

            <a class="btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                <img src="{{ $user && $user->photo ? asset('users/'.$user->photo) : asset('gambar/admindefault.png') }}"
                     width="35" height="35"
                     class="rounded-circle me-2">
                {{ session('name') }}
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li><span class="dropdown-item-text">Role: {{ session('role') }}</span></li>
                <li><a class="dropdown-item" href="{{ route('edit_profil') }}">Profil</a></li>
                <li><hr></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>

<!-- SIDEBAR DESKTOP -->
<div class="sidebar d-none d-lg-block">
    <a href="{{ route('admin.dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="{{ route('projects.index') }}"><i class="bi bi-building"></i> Data Project</a>
    <a href="{{ route('admin.artikel.index') }}"><i class="bi bi-newspaper"></i> Data Artikel</a>
    <a href="{{ route('users.index') }}"><i class="bi bi-people"></i> Data User</a>
    <a href="{{ route('profile.detail') }}"><i class="bi bi-bank"></i> Profil Perusahaan</a>
</div>

<!-- OFFCANVAS MOBILE -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
    <div class="offcanvas-header bg-dark text-white">
        <h5 class="offcanvas-title">Menu Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body bg-dark p-0">
        <a class="d-block text-white p-3" href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a class="d-block text-white p-3" href="{{ route('projects.index') }}">Project</a>
        <a class="d-block text-white p-3" href="{{ route('admin.artikel.index') }}">Artikel</a>
        <a class="d-block text-white p-3" href="{{ route('users.index') }}">User</a>
        <a class="d-block text-white p-3" href="{{ route('profile.detail') }}">Profil</a>
    </div>
</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="text-center py-3 border-top bg-white mt-4">
    <small>&copy; 2026 Natural Land & Property</small>
</footer>

<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>

@yield('scripts')

</body>
</html>