@extends('layouts.app')
@section('content')

<h1 class="text-success fw-bold my-4 text-center">DATA PROPERTI</h1>

<div class="container py-3">

    <div class="row g-4">

        @foreach($Properti as $item)
        <div class="col-md-4 col-sm-6">
            <div class="card shadow-sm h-100">

                <img src="{{ asset('properti/' . $item->gambar) }}" 
                     class="card-img-top"
                     style="height:200px; object-fit:cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $item->jenis }}</h5>

                    <p>📍 {{ $item->lokasi }}</p>
                    <p>💰 Rp {{ number_format($item->harga) }}</p>

                    <a href="/Project/{{ $item->id }}" class="btn btn-success w-100">
                        Detail
                    </a>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    <!-- PAGINATION -->
    <div class="d-flex justify-content-center mt-4">
        {{ $properti->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection