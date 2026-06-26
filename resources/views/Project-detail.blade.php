@extends('layouts.app')

@section('content')

<style>
    .card-img-top {
        width: 100%;
        max-height: 450px;
        object-fit: cover;
        object-position: center;
    }
</style>

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-9">

            <div class="card shadow-lg">

                <!-- GAMBAR -->
                <img src="{{ asset('properti/' . $Properti->gambar) }}" 
                     class="card-img-top">

                <div class="card-body p-4">

                    <!-- JUDUL -->
                    <h3 class="fw-bold mb-3">{{ $Properti->jenis }}</h3>

                    <div class="row">

                        <!-- KIRI -->
                        <div class="col-md-6">
                            <p><strong>📍 Lokasi:</strong> {{ $Properti->lokasi }}</p>
                            <p><strong>📐 Luas:</strong> {{ $Properti->luas_m2 }} m²</p>
                            <p><strong>👤 Pemilik:</strong> {{ $Properti->nama_pemilik ?? '-' }}</p>
                        </div>

                        <!-- KANAN -->
                        <div class="col-md-6">
                            <p>
                                <strong>💰 Harga:</strong><br>
                                <span class="text-success fs-5">
                                    Rp {{ number_format($Properti->harga) }}
                                </span>
                            </p>

                            <p>
                                <strong>📦 Status:</strong><br>
                                @if($Properti->status == 'Selesai')
                                    <span class="badge bg-success">Selesai</span>
                                @elseif($Properti->status == 'Proses')
                                    <span class="badge bg-warning text-dark">Proses</span>
                                @else
                                    <span class="badge bg-secondary">{{ $Properti->status }}</span>
                                @endif
                            </p>
                        </div>

                    </div>

                    <!-- BUTTON -->
                    <a href="/Project" class="btn btn-success w-100 mt-4">
                        ← Kembali ke Data
                    </a>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection