@extends('admin.template')

@section('content')

<div class="container-fluid">

```
<div class="card shadow border-0">

    <div class="card-header bg-success text-white py-3">
        <h4 class="mb-0">
            🏢 Profil Perusahaan
        </h4>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('profile.update') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
             @method('PUT')

            <div class="row">

                <!-- FORM -->
                <div class="col-md-8">

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Nama Perusahaan
                        </label>

                        <input type="text"
                               name="nama_perusahaan"
                               class="form-control"
                               value="{{ old('nama_perusahaan',$profile->nama_perusahaan) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Tentang Perusahaan
                        </label>

                        <textarea name="tentang"
                                  rows="4"
                                  class="form-control">{{ old('tentang',$profile->tentang) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Visi
                        </label>

                        <textarea name="visi"
                                  rows="3"
                                  class="form-control">{{ old('visi',$profile->visi) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Misi
                        </label>

                        <textarea name="misi"
                                  rows="4"
                                  class="form-control">{{ old('misi',$profile->misi) }}</textarea>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">
                                Telepon
                            </label>

                            <input type="text"
                                   name="telepon"
                                   class="form-control"
                                   value="{{ old('telepon',$profile->telepon) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">
                                Email
                            </label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="{{ old('email',$profile->email) }}">
                        </div>

                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Website
                        </label>

                        <input type="text"
                               name="website"
                               class="form-control"
                               value="{{ old('website',$profile->website) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Alamat
                        </label>

                        <textarea name="alamat"
                                  rows="3"
                                  class="form-control">{{ old('alamat',$profile->alamat) }}</textarea>
                    </div>

                </div>

                <!-- LOGO -->
                <div class="col-md-4">

                    <div class="card border">

                        <div class="card-header">
                            Logo Perusahaan
                        </div>

                        <div class="card-body text-center">

                            @if($profile->logo)

                                <img src="{{ asset('logo_perusahaan/'.$profile->logo) }}"
                                     class="img-fluid rounded shadow mb-3"
                                     style="max-height:220px;">

                            @else

                                <img src="{{ asset('gambar/logo.png') }}"
                                     class="img-fluid rounded shadow mb-3"
                                     style="max-height:220px;">

                            @endif

                            <input type="file"
                                   name="logo"
                                   class="form-control">

                        </div>

                    </div>

                </div>

            </div>

            <hr>

            <div class="text-end">

                <button type="submit"
                        class="btn btn-success px-4">
                    💾 Simpan Profil
                </button>

            </div>

        </form>

    </div>

</div>
```

</div>

@endsection
