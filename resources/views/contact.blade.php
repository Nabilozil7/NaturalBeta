@extends('layouts.app')

@section('content')

<style>
.contact-hero{
    background: linear-gradient(135deg, #198754, #0f5132);
    color: white;
    padding: 70px 20px;
    text-align: center;
    border-radius: 0 0 40px 40px;
    margin-bottom: 40px;
}

.contact-logo{
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid #fff;
    margin-bottom: 10px;
    background: white;
}

.contact-card{
    border: none;
    border-radius: 16px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    padding: 25px;
    background: white;
}

.info-box{
    background: #f8f9fa;
    border-left: 5px solid #198754;
    padding: 12px 15px;
    border-radius: 10px;
    margin-bottom: 12px;
}

.form-control{
    border-radius: 10px;
}

.btn-success{
    border-radius: 10px;
}
</style>

<!-- HERO -->
<div class="contact-hero">

    @if($profile && $profile->logo)
        <img src="{{ asset('logo_perusahaan/'.$profile->logo) }}"
             class="contact-logo">
    @endif

    <h2 class="fw-bold">
        {{ $profile->nama_perusahaan ?? 'Company Name' }}
    </h2>

    <p class="mb-0">
        Contact Us - We will respond as soon as possible
    </p>

</div>

<div class="container">

    <div class="row g-4">

        <!-- LEFT INFO -->
        <div class="col-md-5">

            <div class="contact-card">

                <h4 class="text-success fw-bold mb-3">
                    Info Perusahaan
                </h4>

                <div class="info-box">
                    📍 {{ $profile->alamat ?? '-' }}
                </div>

                <div class="info-box">
                    📞 {{ $profile->telepon ?? '-' }}
                </div>

                <div class="info-box">
                    ✉️ {{ $profile->email ?? '-' }}
                </div>

                <div class="info-box">
                    🌐 {{ $profile->website ?? '-' }}
                </div>

            </div>

        </div>

        <!-- RIGHT FORM -->
        <div class="col-md-7">

            <div class="contact-card">

                <h4 class="text-success fw-bold mb-3">
                    Kirim Pesan
                </h4>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Subjek</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Pesan</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>

                    <button class="btn btn-success w-100">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection