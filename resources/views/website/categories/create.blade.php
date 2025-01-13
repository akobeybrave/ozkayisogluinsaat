@extends('website.layouts.website')

@section('title', 'Kategori Ekle')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">Kategori Ekle</h5>
                </div>
                <div class="card-body p-4">


                    <form method="post" action="{{ route("website.categories.store") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold aktext">Kategori Adı</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold aktext">Açıklama</label>
                            <textarea name="description" cols="30" rows="4" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Kategori Resmi</label>
                            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
                            <div class="mt-3">
                                <img id="image-preview" src="#" alt="Resim Önizleme" style="display: none; width: 200px; height: auto;">
                            </div>
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
