@extends('layouts.app')

@section('content')

<style>
body {
    background: #f5f7f9;
    font-family: 'Segoe UI', sans-serif;
}

/* FEATURED */
.featured {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    height: 380px;
}

.featured img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.4s;
}

.featured:hover img {
    transform: scale(1.05);
}

.featured-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 25px;
    background: linear-gradient(to top, rgba(0,0,0,0.75), transparent);
    color: white;
}

.featured-title {
    font-size: 24px;
    font-weight: 800;
}

/* GRID CARD */
.news-card {
    border: none;
    border-radius: 14px;
    overflow: hidden;
    transition: 0.3s;
    background: #fff;
}

.news-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.news-img {
    height: 180px;
    object-fit: cover;
}

.news-title {
    font-size: 15px;
    font-weight: 700;
    color: #1f2937;
}

.news-text {
    font-size: 13px;
    color: #6b7280;
}

.badge-news {
    background: #198754;
    color: white;
    font-size: 11px;
    padding: 4px 10px;
    border-radius: 20px;
}
</style>

<div class="container mt-4">

    {{-- HEADER --}}
    <div class="mb-4 text-center">
        <h1 class="fw-bold text-success">NEWS & UPDATE</h1>
        <p class="text-muted">Latest news & information from Natural</p>
    </div>

    {{-- FEATURED NEWS --}}
    @if($artikel->count())

        @php
            $first = $artikel->first();
            $default = asset('gambar_artikel/artikel_default.png');

            $img = $first->image ?? '';
            $img = trim(str_replace('&amp;', '&', $img));

            if (!$img) {
                $img = $default;
            }
        @endphp

        <a href="{{ $first->link }}" target="_blank" class="text-decoration-none">
            <div class="featured mb-4">

                <img src="{{ $img }}"
                     onerror="this.onerror=null;this.src='{{ $default }}';">

                <div class="featured-content">
                    <span class="badge-news mb-2 d-inline-block">
                        {{ $first->author ?? parse_url($first->link, PHP_URL_HOST) }}
                    </span>

                    <div class="featured-title">
                        {{ $first->title }}
                    </div>
                </div>

            </div>
        </a>

    @endif

    {{-- GRID NEWS --}}
    <div class="row">

        @foreach($artikel->skip(1) as $item)

            @php
                $default = asset('gambar_artikel/artikel_default.png');

                $image = $item->image ?? '';
                $image = trim(str_replace('&amp;', '&', $image));

                if (!$image) {
                    $image = $default;
                }
            @endphp

            <div class="col-md-4 mb-4">

                <div class="news-card shadow-sm">

                    <img src="{{ $image }}"
                         class="news-img w-100"
                         onerror="this.onerror=null;this.src='{{ $default }}';">

                    <div class="p-3">

                        <span class="badge-news mb-2 d-inline-block">
                            {{ $item->author ?? parse_url($item->link, PHP_URL_HOST) }}
                        </span>

                        <div class="news-title mb-1">
                            {{ $item->title }}
                        </div>

                        <div class="news-text">
                            {{ \Illuminate\Support\Str::limit($item->content, 90) }}
                        </div>

                        <a href="{{ $item->link }}" target="_blank"
                           class="btn btn-sm btn-success mt-2 w-100">
                            Read More
                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection