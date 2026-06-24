@extends('admin.template')

@section('content')

<div class="container mt-4">

    <h3>Tambah User</h3>

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Nama" required>

        <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>

        <input type="text" name="phone" class="form-control mb-2" placeholder="Phone">

        <textarea name="address" class="form-control mb-2" placeholder="Alamat"></textarea>

        {{-- 🔥 ROLE --}}
        <select name="role" class="form-control mb-2" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>

        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

        <input type="file" name="photo" class="form-control mb-3">

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('users.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection