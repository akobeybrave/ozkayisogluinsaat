@extends('website.layouts.website')

@section('title', 'Slider Ekle')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">

                <div class="card-body p-4">


                    <form method="post" action="{{ route("website.heroes.store") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="hero_title" class="form-label fw-semibold aktext">Başlık</label>
                            <input type="text" name="hero_title" class="form-control @error('hero_title') is-invalid @enderror">
                            @error('hero_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hero_subtitle" class="form-label fw-semibold aktext">Alt Başlık</label>
                            <input type="text" name="hero_subtitle" class="form-control @error('hero_subtitle') is-invalid @enderror">
                            @error('hero_subtitle')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="hero_slogan" class="form-label fw-semibold aktext">Slogan</label>
                            <input type="text" name="hero_slogan" class="form-control @error('hero_slogan') is-invalid @enderror">
                            @error('hero_slogan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="image" class="form-label">Slide Resmi</label>
                            <input class="form-control" type="file" id="hero_image" name="hero_image" accept="image/*" required>
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
