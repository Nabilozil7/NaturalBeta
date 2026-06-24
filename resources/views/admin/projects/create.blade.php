@extends('admin.template')

@section('content')

<div class="container mt-3">
    <div class="card shadow-sm">
        <div class="card-body">

            <h3>Tambah Project</h3>

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- NAMA PEMILIK -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik" required>
                    </div>

                    <!-- JENIS -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jenis</label>
                        <input type="text" class="form-control" name="jenis" required>
                    </div>

                    <!-- LOKASI -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" required>
                    </div>

                    <!-- STATUS -->
                    <select name="status" class="form-select">
                        <option value="Available">Available</option>
                        <option value="Negotiation">Negotiation</option>
                        <option value="Acquisition">Acquisition</option>
                        <option value="Booked">Booked</option>
                        <option value="Sold">Sold</option>
                    </select>
                    <div class="mb-3">
                        <label>Luas (m²)</label>
                        <input type="number"
                            name="luas_m2"
                            class="form-control"
                            required>
                    </div>

                    <!-- HARGA -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" required>
                    </div>

                    <!-- GAMBAR -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" required>
                    </div>

                    <!-- BUTTON -->
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                        <a href="{{ route('projects.index') }}" class="btn btn-danger">Batal</a>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection