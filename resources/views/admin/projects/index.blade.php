@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="container-fluid">

        <div class="d-flex justify-content-between mb-3 py-3">
            <h3 class="text-success fw-bold">DATA PROPERTI</h3>

            <div>
                <a href="{{ route('projects.create') }}" class="btn btn-success">
                    + Tambah Data
                </a>

                <a href="{{ route('projects.pdf') }}" class="btn btn-warning text-white" >
                    Cetak PDF
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body">

                <table class="table table-bordered" id="tabel_projects">

                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Pemilik</th>
                            <th>Jenis</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <!-- GAMBAR -->
                            <td>
                                @if ($project->gambar)
                                    <img src="{{ asset('properti/'.$project->gambar) }}"
                                         class="img-thumbnail"
                                         style="max-width: 100px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <td>{{ $project->nama_pemilik }}</td>
                            <td>{{ $project->jenis }}</td>
                            <td>{{ $project->lokasi }}</td>
                            <td>Rp {{ number_format($project->harga) }}</td>
                            <td>
                                <span class="badge bg-success">
                                    {{ $project->status }}
                                </span>
                            </td>

                            <td>
                                <a href="{{ route('projects.edit', $project->id) }}"
                                   class="btn btn-sm btn-warning text-white">
                                    Edit
                                </a>

                                <form action="{{ route('projects.destroy', $project->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-sm btn-danger"
                                            onclick="return confirm('Yakin ingin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#tabel_projects').DataTable();
    });
</script>
@endsection