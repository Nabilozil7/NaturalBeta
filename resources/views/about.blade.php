@extends('layouts.app')

@section('content')

<style>
.about-hero{
    background: linear-gradient(135deg, #198754, #0f5132);
    color: white;
    padding: 80px 20px;
    text-align: center;
    border-radius: 0 0 40px 40px;
    position: relative;
    overflow: hidden;
}

.about-hero::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    background:rgba(255,255,255,0.08);
    border-radius:50%;
    top:-80px;
    right:-60px;
}

.about-title{
    font-size: 40px;
    font-weight: 800;
}

.about-sub{
    opacity: .9;
    margin-top: 10px;
}

.about-card{
    border: none;
    border-radius: 18px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    padding: 35px;
    margin-top: -40px;
    background: white;
}

.about-text{
    font-size: 16px;
    line-height: 1.9;
    color: #444;
}

.highlight-box{
    background: #f8f9fa;
    border-left: 5px solid #198754;
    padding: 15px 20px;
    border-radius: 10px;
    font-style: italic;
}
</style>

<!-- HERO -->
<div class="about-hero">

    <h1 class="about-title">TENTANG</h1>

    <h2 class="fw-bold mt-3">
        <img src="{{ asset('gambar/logo.png') }}" height="45" class="me-2">
        NATURAL LAND & PROPERTY
    </h2>

    <p class="about-sub">
        Sistem Informasi Pengadaan Lahan dan Properti Modern & Terintegrasi
    </p>

</div>

<!-- CONTENT -->
<div class="container">

    <div class="about-card">

        <p class="about-text">
            <strong>Natural Land & Property</strong> adalah sistem informasi yang dirancang untuk membantu pengelolaan
            data pengadaan lahan dan properti secara lebih modern, cepat, dan terstruktur. Sistem ini hadir untuk
            menggantikan proses manual yang selama ini memakan waktu dan rentan kesalahan.
        </p>

        <p class="about-text">
            Di era digital saat ini, pengelolaan aset properti membutuhkan sistem yang tidak hanya cepat, tetapi juga
            transparan dan mudah diakses. Natural Land & Property memberikan solusi tersebut dengan mengintegrasikan
            seluruh data dalam satu platform.
        </p>

        <p class="about-text">
            Melalui sistem ini, pengguna dapat memantau status properti seperti <strong>available</strong>,
            <strong>acquisition</strong>, <strong>booking</strong>, hingga <strong>sold</strong>. Setiap data juga
            dilengkapi dengan informasi detail seperti lokasi, luas, harga, dan status kepemilikan.
        </p>

        <div class="highlight-box my-4">
            “Membangun sistem pengelolaan lahan yang modern, transparan, dan terintegrasi.”
        </div>

        <p class="about-text">
            Ke depannya, sistem ini akan terus dikembangkan dengan fitur tambahan seperti peta interaktif,
            analisis data berbasis grafik, serta integrasi dengan sistem penjualan properti online untuk
            meningkatkan efisiensi bisnis.
        </p>

    </div>

</div>

@endsection