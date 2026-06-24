@extends('admin.template')

@section('content')

<div class="container-fluid">

```
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold text-success">DATA ADMIN</h3>

    <button class="btn btn-success" onclick="bukaForm()">
        + Tambah Admin
    </button>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- FORM -->
<div id="formAdmin"
     class="card border-0 shadow-lg mb-4"
     style="{{ isset($user) ? '' : 'display:none;' }}">

```
<div class="card-header border-0 py-3"
     style="background: linear-gradient(135deg,#198754,#157347);">

    <div class="d-flex align-items-center">

        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-3"
             style="width:50px;height:50px;">

            <span style="font-size:22px">👤</span>

        </div>

        <div>
            <h4 class="mb-0 text-white fw-bold">
                {{ isset($user) ? 'Edit Data Admin' : 'Tambah Data Admin' }}
            </h4>

            <small class="text-white">
                Kelola data administrator Natural Land & Property
            </small>
        </div>

    </div>

</div>

<div class="card-body p-4">

    <form method="POST"
          action="{{ isset($user)
                    ? route('users.update',$user->id)
                    : route('users.store') }}">
        @csrf

        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="fw-semibold mb-2">
                    Nama Lengkap
                </label>

                <input type="text"
                       name="name"
                       class="form-control form-control-lg"
                       placeholder="Masukkan nama admin"
                       value="{{ $user->name ?? old('name') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-semibold mb-2">
                    Email
                </label>

                <input type="email"
                       name="email"
                       class="form-control form-control-lg"
                       placeholder="Masukkan email"
                       value="{{ $user->email ?? old('email') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-semibold mb-2">
                    Nomor Telepon
                </label>

                <input type="text"
                       name="phone"
                       class="form-control form-control-lg"
                       placeholder="08xxxxxxxxxx"
                       value="{{ $user->phone ?? old('phone') }}">
            </div>

            <div class="col-md-6 mb-3">
                <label class="fw-semibold mb-2">
                    Password
                </label>

                <input type="password"
                       name="password"
                       class="form-control form-control-lg"
                       placeholder="Minimal 6 karakter">

                @if(isset($user))
                <small class="text-muted">
                    Kosongkan jika password tidak diubah
                </small>
                @endif
            </div>

            <div class="col-12 mb-3">
                <label class="fw-semibold mb-2">
                    Alamat
                </label>

                <textarea name="address"
                          rows="3"
                          class="form-control"
                          placeholder="Masukkan alamat admin">{{ $user->address ?? old('address') }}</textarea>
            </div>

        </div>

        <hr>

        <div class="d-flex gap-2">

            <button type="submit"
                    class="btn btn-success px-4">
                {{ isset($user) ? 'Update Admin' : 'Simpan Admin' }}
            </button>

            <button type="button"
                    class="btn btn-outline-secondary px-4"
                    onclick="tutupForm()">
                Batal
            </button>

        </div>

    </form>

</div>
```

</div>

</div>

<!-- LIST ADMIN -->
<div class="row">

    @foreach($users as $item)

    <div class="col-md-4 mb-4">

        <div class="card shadow-sm border-0 text-center p-3">

            <img src="https://ui-avatars.com/api/?name={{ urlencode($item->name) }}&background=198754&color=fff"
                 width="90"
                 height="90"
                 class="rounded-circle mx-auto mb-3">

            <h5 class="fw-bold">
                {{ $item->name }}
            </h5>

            <p class="text-muted mb-1">
                {{ $item->email }}
            </p>

            <span class="badge bg-success">
                {{ $item->role ?? 'Admin' }}
            </span>

            <div class="mt-3 text-muted small">
                <div>📞 {{ $item->phone ?: '-' }}</div>
                <div>📍 {{ $item->address ?: '-' }}</div>
            </div>

            <div class="mt-3">

                <a href="{{ route('users.edit', $item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('users.delete', $item->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus admin ini?')">
                        Delete
                    </button>

                </form>

            </div>

        </div>

    </div>

    @endforeach

</div>
```

</div>

@endsection

@section('scripts')

<script>
function bukaForm() {
    document.getElementById('formAdmin').style.display = 'block';
}

function tutupForm() {
    document.getElementById('formAdmin').style.display = 'none';
}
</script>

@endsection
