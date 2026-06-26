<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Admin web profile')</title>

       <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.3.8/css/dataTables.dataTables.css">

<style>
    body{background-color: #f8f9fa;}
    .sidebar{
        width: 200px;
        min-height: 100vh;
        background-color: #343a40;
        position: fixed;
        top: 66px;
        
    }
    .sidebar a{
        display: block;
        color: #fff;
        padding:10px 15px;
        text-decoration:none;
    }
    .sidebar a:hover{
        background-color: #05c344;

    }
    .content {
        margin-top: 70px;
        margin-left: 250px;
        padding:20px;
    }
    .card {
        border: 0;
        border-radius: 10px;
    }

</style>

@media (max-width: 768px) {

    .sidebar{
        position: relative;
        width: 100%;
        min-height: auto;
        top: 0;
    }

    .content{
        margin-left: 0;
        margin-top: 20px;
        padding: 15px;
    }

    .navbar .container{
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar-nav{
        width: 100%;
        margin-top: 10px;
    }

    .navbar-nav .nav-item{
        width: 100%;
    }

    .navbar-nav .dropdown{
        width: 100%;
    }
}



</head>


<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm px-3" style="background-color: #ffffff">
    <div class="container">

        <a href="{{ route('admin.dashboard') }}" class="navbar-brand d-flex align-items-center fw-bold" style="color:#2b9b09">
            <img src="{{ asset('gambar/logo.png') }}" width="50" height="50" class="me-2">
            NATURAL ADMIN
        </a>

        <ul class="navbar-nav ms-auto d-flex align-items-center">

            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link fw-semibold">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('edit_profil') }}" class="dropdown-item fw-semibold">
                    Profil Saya
                </a>
            </li>
<li class="nav-item dropdown d-flex align-items-center ms-3">

    @php
    $user = \App\Models\User::find(session('user_id'));
@endphp

@if($user && $user->photo)
    <img src="{{ asset('users/'.$user->photo) }}?v={{ time() }}"
         width="40"
         height="40"
         class="rounded-circle me-2 border"
         style="object-fit:cover;">
@else
    <img src="{{ asset('gambar/admindefault.png') }}"
         width="40"
         height="40"
         class="rounded-circle me-2 border"
         style="object-fit:cover;">
@endif

    <a class="nav-link dropdown-toggle p-0" href="#" data-bs-toggle="dropdown">
        {{ session('name') ?? 'Guest' }}
    </a>

    <ul class="dropdown-menu dropdown-menu-end">

        <li class="dropdown-item-text text-muted">
            Role: {{ session('role') ?? '-' }}

        </li>
        <li>
    <a href="{{ route('edit_profil') }}" class="dropdown-item">
        Edit Profil
    </a>
</li>

        <li><hr class="dropdown-divider"></li>

        <li>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button class="dropdown-item">
                    Logout
                </button>
            </form>
        </li>

    </ul>

</li>

    </div>
</nav>

<div class="sidebar shadow-sm mb-3">
    <h5 class="text-center text-white py-3">ADMIN MENU</h5>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a href="{{ route('projects.index') }}">Data Project</a>
    <a href="{{ route('admin.artikel.index') }}">Data Artikel</a>
    <a href="{{ route('users.index') }}">Data User</a>
    <a href="{{ route('profile.detail') }}">Profil Perusahaan</a>
  
</div>


<div class="content p-3 d-flex flex-column">
    <div class="flex-grow:1">
        @yield('content')
    </div>

</div>


<footer class="bg-white text-dark text-center border-top py-3 mt-5">
<p class="mb-0 py-3">&copy; 2026 Natural Land & Property. By Nabil Ibtihal</p>
</footer>
<script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
@yield('scripts')
</body>
    

</html>