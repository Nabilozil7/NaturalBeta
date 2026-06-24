@extends('admin.template')

@section('content')

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-body">

            <h3 class="mb-4 text-success">Edit Properti</h3>

            <form action="{{ route('projects.update', $project->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <!-- NAMA PEMILIK -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Pemilik</label>
                        <input type="text"
                               name="nama_pemilik"
                               class="form-control"
                               value="{{ $project->nama_pemilik }}"
                               required>
                    </div>

                    <!-- JENIS -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Jenis</label>
                        <input type="text"
                               name="jenis"
                               class="form-control"
                               value="{{ $project->jenis }}"
                               required>
                    </div>

                    <!-- LOKASI -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text"
                               name="lokasi"
                               class="form-control"
                               value="{{ $project->lokasi }}"
                               required>
                    </div>

                    <!-- LUAS M2 (FIX: value belum ada sebelumnya) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Luas (m²)</label>
                        <input type="number"
                               name="luas_m2"
                               class="form-control"
                               value="{{ $project->luas_m2 }}"
                               required>
                    </div>

                    <!-- STATUS (FIX: harus auto selected) -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>

                        <select name="status" class="form-control" required>
                            <option value="available" {{ $project->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="negotiation" {{ $project->status == 'negotiation' ? 'selected' : '' }}>Negotiation</option>
                            <option value="acquisition" {{ $project->status == 'acquisition' ? 'selected' : '' }}>Acquisition</option>
                            <option value="booked" {{ $project->status == 'booked' ? 'selected' : '' }}>Booked</option>
                            <option value="sold" {{ $project->status == 'sold' ? 'selected' : '' }}>Sold</option>
                        </select>
                    </div>

                    <!-- HARGA -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number"
                               name="harga"
                               class="form-control"
                               value="{{ $project->harga }}"
                               required>
                    </div>

                    <!-- GAMBAR -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Gambar</label>

                        @if($project->gambar)
                            <div class="mb-2">
                                <img src="{{ asset('properti/'.$project->gambar) }}"
                                     width="120"
                                     class="img-thumbnail">
                            </div>
                        @endif

                        <input type="file"
                               name="gambar"
                               class="form-control">
                    </div>

                    <!-- BUTTON -->
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-success">
                            Update
                        </button>

                        <a href="{{ route('projects.index') }}"
                           class="btn btn-outline-secondary">
                            Batal
                        </a>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>

@endsection