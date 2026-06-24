@extends('admin.template')

@section('content')

<style>

.profile-header{
    position: relative;
    margin-bottom: 120px;
}

.profile-cover{
    width: 100%;
    height: 350px;

    background:
      
        url('{{ asset("gambar/GREEN.jpg") }}');

    background-size: cover;
    background-position: center;
    border-radius: 20px;
}

.profile-photo{
    width: 180px;
    height: 180px;
    object-fit: cover;

    border-radius: 50%;
    border: 6px solid #fff;

    position: absolute;
    left: 50%;
    bottom: -90px;

    transform: translateX(-50%);

    background: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,.2);
}

.profile-info{
    text-align: center;
    margin-top: 100px;
}

.profile-info h2{
    font-weight: 700;
    margin-bottom: 5px;
}

.profile-info p{
    color: #6c757d;
    margin-bottom: 0;
}

.form-card{
    border: none;
    border-radius: 20px;
}

.form-label{
    font-weight: 600;
}

</style>

<div class="container-fluid px-0">

    <!-- HEADER PROFILE -->
    <div class="profile-header">

        <div class="profile-cover"></div>

        @if($user->photo)
            <img src="{{ asset('users/'.$user->photo) }}"
                class="profile-photo">
        @else
            <img src="{{ asset('gambar/admindefault.png') }}"
                class="profile-photo">
        @endif

    </div>

    <!-- NAMA USER -->
    <div class="profile-info">

        <h2>{{ $user->name }}</h2>

        <p>
            {{ ucfirst($user->role) }}
        </p>

    </div>

    <!-- FORM -->
    <div class="card shadow-sm form-card mt-4">

        <div class="card-body p-4">

            <h4 class="text-success mb-4">
                Edit Profil
            </h4>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('update_profil') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Nama Lengkap
                        </label>

                        <input type="text"
                            name="name"
                            class="form-control"
                            value="{{ $user->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Email
                        </label>

                        <input type="email"
                            name="email"
                            class="form-control"
                            value="{{ $user->email }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Nomor Telepon
                        </label>

                        <input type="text"
                            name="phone"
                            class="form-control"
                            value="{{ $user->phone }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Foto Profil Baru
                        </label>

                        <input type="file"
                            name="photo"
                            class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">
                            Alamat
                        </label>

                        <textarea
                            name="address"
                            rows="3"
                            class="form-control">{{ $user->address }}</textarea>
                    </div>

                    <div class="col-12 mb-4">
                        <label class="form-label">
                            Password Baru
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti password.
                        </small>
                    </div>

                </div>

                <div class="text-end">

                    <button
                        type="submit"
                        class="btn btn-success px-4">

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection