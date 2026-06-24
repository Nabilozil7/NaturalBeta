@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow">

        <img src="{{ asset('artikel/' . $artikel->image) }}" 
             class="card-img-top"
             style="max-height:400px; object-fit:cover;">

        <div class="card-body">

            <h2 class="fw-bold">{{ $artikel->title }}</h2>

            <p class="text-muted">By {{ $artikel->author }}</p>

            <hr>

            <p>{{ $artikel->content }}</p>

            <a href="/artikel" class="btn btn-success w-100 mt-3">
                Kembali
            </a>

        </div>

    </div>

</div>

@endsection