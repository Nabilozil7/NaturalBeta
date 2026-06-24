@extends('admin.template')

@section('content')

<div class="container-fluid">

```
<div class="row justify-content-center">

    <div class="col-lg-10">

        <div class="card shadow border-0">

            <div class="card-header bg-success text-white py-3">
                <h4 class="mb-0">
                    ✏️ Edit Artikel
                </h4>
            </div>

            <div class="card-body p-4">

                <form action="{{ route('admin.artikel.update',$article->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row">

                        <!-- FORM -->
                        <div class="col-md-8">

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Judul Artikel
                                </label>

                                <input type="text"
                                       name="title"
                                       class="form-control"
                                       value="{{ old('title',$article->title) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Author
                                </label>

                                <input type="text"
                                       name="author"
                                       class="form-control"
                                       value="{{ old('author',$article->author) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Link Artikel
                                </label>

                                <input type="url"
                                       name="link"
                                       class="form-control"
                                       value="{{ old('link',$article->link) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Konten Artikel
                                </label>

                                <textarea name="content"
                                          rows="8"
                                          class="form-control">{{ old('content',$article->content) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">
                                    Upload Gambar Baru
                                </label>

                                <input type="file"
                                       name="image"
                                       class="form-control">
                            </div>

                        </div>

                        <!-- PREVIEW -->
                        <div class="col-md-4">

                            <div class="card border">

                                <div class="card-header bg-light">
                                    <strong>Preview Gambar</strong>
                                </div>

                                <div class="card-body text-center">

                                    @if($article->image)

                                        @if(str_starts_with($article->image,'http'))

                                            <img src="{{ $article->image }}"
                                                 class="img-fluid rounded shadow">

                                        @else

                                            <img src="{{ asset('gambar_artikel/'.$article->image) }}"
                                                 class="img-fluid rounded shadow">

                                        @endif

                                    @else

                                        <img src="{{ asset('gambar_artikel/artikel_default.png') }}"
                                             class="img-fluid rounded shadow">

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>

                    <hr>

                    <div class="d-flex justify-content-end gap-2">

                        <a href="{{ route('admin.artikel.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit"
                                class="btn btn-success">
                            Simpan Perubahan
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
