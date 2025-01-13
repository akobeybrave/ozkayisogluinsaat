@extends('website.layouts.website')

@section('title', 'Makale Oluştur')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">Makale Ekle Sayfası</h5>
                </div>
                <div class="card-body p-4">


                    <form method="post" action="{{ route("admin.articles.update", $article) }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold aktext">Makale Başlık</label>
                            <input type="text" name="title" value="{{ old("title", $article->title) }}" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="author" class="form-label fw-semibold aktext">Author</label>
                            <input type="text" name="author" value="{{ old("author", $article->author) }}" class="form-control @error('author') is-invalid @enderror">
                            @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="text" class="form-label fw-semibold aktext">Makale text</label>
                            <textarea class="form-control @error('text') is-invalid @enderror" name="text" rows="6" cols="6">{{ old("text", $article->text) }}</textarea>
                            @error('text')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- Buttons --}}
                        <div class="d-flex justify-content-between mt-6">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-warning px-4 d-flex align-items-center justify-content-between gap-2">
                                <i class="ri-arrow-go-back-line ri-lg"></i>
                                <span>Geri</span>
                            </a>
                            <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                                <i class="ri-send-plane-fill ri-lg"></i>
                                <span>Kaydet</span>
                            </button>
                        </div>
                        {{-- Buttons --}}

                    </form>

                </div>
            </div>
        </div>

    </div>



@endsection
