@extends('admin.template')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Artikel</h3>

        <a href="{{ route('admin.artikel.create') }}"
           class="btn btn-success">
            + Tambah Artikel
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">

        @foreach($articles as $item)

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

               @if($item->image)
                    <img src="{{ str_replace('&amp;', '&', $item->image) }}"
                        class="card-img-top"
                        style="height:220px;object-fit:cover;">
                @else
                    <img src="{{ asset('gambar_artikel/artikel_default.png') }}"
                        class="card-img-top"
                        style="height:220px;object-fit:cover;">
                @endif

                <div class="card-body">

                    <h5>{{ $item->title }}</h5>

                    <small class="text-muted">
                        ✍ {{ $item->author }}
                    </small>

                    <p class="mt-2">
                        {{ Str::limit($item->content, 100) }}
                    </p>

                    @if($item->link)
                        <a href="{{ $item->link }}"
                           target="_blank">
                           Source
                        </a>
                    @endif

                </div>

                <div class="card-footer bg-white">

                    <a href="{{ route('admin.artikel.edit',$item->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('admin.artikel.destroy',$item->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus artikel?')">
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