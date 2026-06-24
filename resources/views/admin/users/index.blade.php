@extends('admin.template')

@section('content')

<div class="container mt-4">

{{-- HEADER --}}
<div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="mb-0">Data User</h3>

    {{-- 🔥 tombol ke halaman create --}}
    <a href="{{ route('users.create') }}" class="btn btn-success">
        + Tambah User
    </a>

</div>

{{-- ALERT --}}
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- LIST USER --}}
<div class="row">

@foreach($users as $item)

<div class="col-md-4 mb-4">

    <div class="card shadow text-center p-3 border-0">

        {{-- FOTO --}}
        <img src="{{ $item->photo 
            ? asset('users/'.$item->photo)
            : asset('users/default.png') }}"
            class="rounded-circle mx-auto shadow"
            width="90"
            height="90"
            style="object-fit: cover;">

        {{-- NAME --}}
        <h5 class="mt-2">{{ $item->name }}</h5>

        {{-- EMAIL --}}
        <p class="text-muted mb-1">{{ $item->email }}</p>

        {{-- ROLE --}}
        <span class="badge bg-{{ $item->role == 'admin' ? 'danger' : 'success' }}">
            {{ strtoupper($item->role ?? 'USER') }}
        </span>

        {{-- INFO --}}
        <div class="small mt-2 text-muted">
            📞 {{ $item->phone ?? '-' }} <br>
            📍 {{ $item->address ?? '-' }}
        </div>

        {{-- ACTION --}}
        <div class="mt-3">

            <a href="{{ route('users.edit', $item->id) }}"
               class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('users.delete', $item->id) }}"
                  method="POST"
                  class="d-inline">
                @csrf

                <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus user ini?')">
                    Delete
                </button>
            </form>

        </div>

    </div>

</div>

@endforeach

</div>

</div>

@endsection