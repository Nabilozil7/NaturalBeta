@extends('admin.template')

@section('content')

<div class="container mt-4">
    <h3>Edit User</h3>

    <form method="POST"
          action="{{ route('users.update', $user->id) }}"
          enctype="multipart/form-data">

        @csrf

        {{-- FOTO LAMA --}}
        @if($user->photo)
            <div class="mb-2">
                <img src="{{ asset('users/'.$user->photo) }}"
                     width="120"
                     class="rounded-circle">
            </div>
        @endif

        {{-- FOTO BARU --}}
        <div class="mb-3">
            <label>Ganti Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>

        {{-- NAMA --}}
        <input type="text" name="name"
               value="{{ $user->name }}"
               class="form-control mb-2">

        {{-- EMAIL --}}
        <input type="email" name="email"
               value="{{ $user->email }}"
               class="form-control mb-2">

        {{-- 🔥 ROLE TARUH DI SINI --}}
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control">
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>
                    User
                </option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>
            </select>
        </div>

        {{-- PHONE --}}
        <input type="text" name="phone"
               value="{{ $user->phone }}"
               class="form-control mb-2">

        {{-- ADDRESS --}}
        <textarea name="address"
                  class="form-control mb-2">{{ $user->address }}</textarea>

        <button class="btn btn-success">
            Update
        </button>

    </form>
</div>

@endsection