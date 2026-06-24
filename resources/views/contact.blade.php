@extends('layouts.app')

@section('content')

<style>

.contact-hero{
    background:
    linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
    url('{{ asset("gambar/mononat.jpg") }}');

    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 20px;
    text-align: center;
    border-radius: 0 0 40px 40px;
    margin-bottom: 50px;
}

.contact-logo{
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 5px solid #fff;
    background: white;
    margin-bottom: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,.25);
}

.contact-card{
    border: none;
    border-radius: 18px;
    box-shadow: 0 8px 25px rgba(0,0,0,.08);
    background: white;
    padding: 25px;
}

.info-box{
    background: #f8f9fa;
    border-left: 5px solid #198754;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 12px;
}

.form-control{
    border-radius: 10px;
}

.btn-success{
    border-radius: 10px;
    padding: 12px;
    font-weight: 600;
}

.section-title{
    color: #198754;
    font-weight: 700;
    margin-bottom: 20px;
}

.map-frame{
    border-radius: 15px;
    overflow: hidden;
}

</style>

<!-- HERO -->

<div class="contact-hero">


@if($profile && $profile->logo)
    <img src="{{ asset('logo_perusahaan/'.$profile->logo) }}"
         class="contact-logo">
@endif

<h1 class="fw-bold">
    {{ $profile->nama_perusahaan ?? 'Natural Land & Property' }}
</h1>

<p class="lead mb-2">
    Hubungi Kami
</p>




</div>

<div class="container mb-5">


<div class="row g-4">

    <!-- INFO -->
    <div class="col-lg-5">

        <div class="contact-card">

            <h4 class="section-title">
                Informasi Perusahaan
            </h4>

            <div class="info-box">
                <strong>📍 Alamat</strong><br>
                {{ $profile->alamat ?? '-' }}
            </div>

            <div class="info-box">
                <strong>📞 Telepon</strong><br>
                {{ $profile->telepon ?? '-' }}
            </div>

            <div class="info-box">
                <strong>✉️ Email</strong><br>
                {{ $profile->email ?? '-' }}
            </div>

            <div class="info-box">
                <strong>🌐 Website</strong><br>
                {{ $profile->website ?? '-' }}
            </div>

            <div class="info-box">
                <strong>🕒 Jam Operasional</strong><br>
                Senin - Jumat<br>
                08:00 - 17:00 WIB
            </div>

        </div>

        <!-- MAP -->
        <div class="contact-card mt-4">

            <h5 class="section-title">
                Lokasi Kami
            </h5>

            <div class="map-frame">

                <iframe
                    src="https://maps.google.com/maps?q={{ urlencode($profile->alamat ?? '') }}&output=embed"
                    width="100%"
                    height="250"
                    style="border:0;"
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

    <!-- FORM -->
    <div class="col-lg-7">

        <div class="contact-card">

            <h4 class="section-title">
                Kirim Pesan
            </h4>

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert">
                </button>
            </div>
            @endif

            <form action="{{ route('contact.send') }}"
                  method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Nama Lengkap
                    </label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name') }}"
                           required>

                    @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                           required>

                    @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Subjek
                    </label>

                    <input type="text"
                           name="subject"
                           class="form-control"
                           value="{{ old('subject') }}"
                           required>

                    @error('subject')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Pesan
                    </label>

                    <textarea
                        name="message"
                        rows="6"
                        class="form-control"
                        required>{{ old('message') }}</textarea>

                    @error('message')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror

                </div>

                <button type="submit"
                        class="btn btn-success w-100">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</div>
```

</div>

@endsection
