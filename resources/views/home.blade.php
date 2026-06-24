@extends('layouts.app')

@section('content')

<style>
.hero-section{
    background: linear-gradient(135deg, #0f5132, #198754);
    color: white;
    padding: 90px 20px;
    text-align: center;
    border-radius: 0 0 40px 40px;
    position: relative;
    overflow: hidden;
}

.hero-section::after{
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    background: rgba(255,255,255,0.08);
    border-radius: 50%;
    top: -100px;
    right: -80px;
}

.hero-title{
    font-size: 42px;
    font-weight: 800;
    letter-spacing: 1px;
}

.hero-desc{
    max-width: 800px;
    margin: 20px auto 0;
    font-size: 17px;
    opacity: 0.9;
    line-height: 1.8;
}

.stat-box{
    background: white;
    border-radius: 18px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.stat-box:hover{
    transform: translateY(-5px);
}

.stat-number{
    font-size: 34px;
    font-weight: bold;
    color: #198754;
}

.stat-label{
    color: #666;
    margin-top: 5px;
    font-weight: 500;
}
</style>

<!-- HERO -->
<div class="hero-section">

    <h1 class="hero-title">
        NATURAL LAND & PROPERTY
    </h1>

    <p class="hero-desc">
        Sistem Informasi Pengadaan Lahan dan Properti yang dirancang untuk mengelola data secara modern, transparan, dan terintegrasi.
        Platform ini membantu perusahaan dalam mengatur aset tanah, rumah, ruko, dan berbagai jenis properti dengan lebih cepat, akurat, dan efisien.
        Dengan sistem ini, proses pengadaan, pemantauan status, hingga penyelesaian project dapat dilakukan secara real-time dan terstruktur.
    </p>

</div>

<!-- STATS -->
<div class="container py-5">

    <div class="row g-4">

        <div class="col-md-3">
            <div class="stat-box">
                <div class="stat-number">{{ $totalProperti }}+</div>
                <div class="stat-label">Total Properti</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <div class="stat-number">{{ $projectSelesai }}+</div>
                <div class="stat-label">Project Selesai</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <div class="stat-number">{{ $asetDikelola }}+</div>
                <div class="stat-label">Aset Dikelola</div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box">
                <div class="stat-number">{{ $mitra }}+</div>
                <div class="stat-label">Mitra Bisnis</div>
            </div>
        </div>

    </div>

</div>

@endsection