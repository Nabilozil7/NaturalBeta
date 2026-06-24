@extends('admin.template')

@section('content')

<div class="container mt-4">

    <h3>Tambah Artikel dari Link</h3>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('admin.artikel.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Link Artikel</label>
                    <input type="url"
                           name="link"
                           class="form-control"
                           placeholder="https://..."
                           required>
                </div>

                <button class="btn btn-success">
                    Ambil Artikel
                </button>

            </form>

        </div>
    </div>

</div>


@endsection