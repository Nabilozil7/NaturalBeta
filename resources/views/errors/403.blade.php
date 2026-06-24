<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>403 - Akses Ditolak</title>

<link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

<style>
body{
    background: linear-gradient(135deg,#f8fff8,#e8f5e9);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.error-card{
    background:white;
    border:none;
    border-radius:20px;
    padding:40px;
    text-align:center;
    max-width:500px;
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.error-code{
    font-size:80px;
    font-weight:700;
    color:#198754;
}

.error-icon{
    font-size:70px;
}

.btn-home{
    background:#198754;
    color:white;
    border:none;
    padding:10px 25px;
    border-radius:10px;
}

.btn-home:hover{
    background:#146c43;
    color:white;
}
</style>

</head>
<body>

<div class="error-card">

    <div class="error-icon">
        🔒
    </div>

    <div class="error-code">
        403
    </div>

    <h3 class="fw-bold mb-3">
        Akses Ditolak
    </h3>

    <p class="text-muted">
        Maaf, Anda tidak memiliki hak akses untuk membuka halaman ini.
    </p>

    <p class="text-muted small">
        Silakan hubungi Administrator apabila Anda merasa ini adalah kesalahan.
    </p>

    <div class="mt-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-home">
            Kembali ke Dashboard
        </a>
    </div>

</div>

</body>
</html>