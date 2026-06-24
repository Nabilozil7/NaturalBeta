@extends('admin.template')

@section('content')

<style>
.hero-company{
    background: linear-gradient(rgba(0,0,0,.45), rgba(0,0,0,.45)),
                url('{{ asset("gambar/mononat.jpg") }}');
    background-size: cover;
    background-position: center;
    border-radius: 20px;
    padding: 80px 40px;
    text-align: center;
    color: white;
    margin-bottom: 80px;
    position: relative;
}

.company-logo{
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    border: 6px solid #fff;
    background: #fff;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -70px;
    box-shadow: 0 10px 30px rgba(0,0,0,.2);
}

.section-card{
    border: none;
    border-radius: 18px;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    height: 100%;
}

.stat-box{
    background: white;
    border-radius: 18px;
    text-align: center;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
}

.stat-number{
    font-size: 32px;
    font-weight: bold;
    color: #198754;
}

.contact-box{
    background: white;
    border-radius: 18px;
    text-align: center;
    padding: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    height: 100%;
}

.section-title{
    color: #198754;
    font-weight: 700;
    margin-bottom: 15px;
}
</style>

<div class="container-fluid">
    @if(session('role') == 'admin')
<div class="text-end mt-4">
    <a href="{{ route('profile.edit') }}"
       class="btn btn-warning px-4">
        Edit Profil
    </a>
</div>
@endif

<div class="hero-company">

    <h1 class="fw-bold display-5">
        {{ $profile->nama_perusahaan }}
    </h1>

    <p class="lead mb-0">
        Building Sustainable Communities & Better Living
    </p>

    @if($profile->logo)
        <img src="{{ asset('logo_perusahaan/'.$profile->logo) }}"
             class="company-logo">
    @else
        <img src="{{ asset('logo_perusahaan/logo.png') }}"
             class="company-logo">
    @endif

</div>

<div style="height:40px"></div>

<!-- Statistik -->
<div class="row mb-5">

    <div class="col-md-3 mb-3">
        <div class="stat-box">
            <div class="stat-number">15+</div>
            <div>Tahun Pengalaman</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-box">
            <div class="stat-number">50+</div>
            <div>Project Selesai</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-box">
            <div class="stat-number">100+</div>
            <div>Aset & Lahan Dikelola</div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="stat-box">
            <div class="stat-number">20+</div>
            <div>Mitra Bisnis</div>
        </div>
    </div>

</div>

<!-- Tentang -->
<div class="card section-card mb-4">
    <div class="card-body p-4">
        <h3 class="section-title">Tentang Perusahaan</h3>
        <p class="mb-0">
            {{ $profile->tentang }}
        </p>
    </div>
</div>

<!-- Visi Misi -->
<div class="row mb-4">

    <div class="col-md-6 mb-3">
        <div class="card section-card">
            <div class="card-body">
                <h3 class="section-title">Visi</h3>
                <p>{{ $profile->visi }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
    <div class="card section-card">
        <div class="card-body">
            <h3 class="section-title">Misi</h3>

            <ul class="list-group list-group-flush">

                @foreach(explode("\n", $profile->misi) as $misi)

                    @if(trim($misi))
                    <li class="list-group-item border-0 ps-0">
                        ✓ {{ trim($misi) }}
                    </li>
                    @endif

                @endforeach

            </ul>

        </div>
    </div>
</div>

</div>

<!-- Kontak -->
<div class="row">

    <div class="col-md-3 mb-3">
        <div class="contact-box">
            <h5>📍 Alamat</h5>
            <small>{{ $profile->alamat }}</small>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="contact-box">
            <h5>📞 Telepon</h5>
            <small>{{ $profile->telepon }}</small>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="contact-box">
            <h5>✉️ Email</h5>
            <small>{{ $profile->email }}</small>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="contact-box">
            <h5>🌐 Website</h5>
            <small>{{ $profile->website }}</small>
        </div>
    </div>

</div>



</div>

@endsection
