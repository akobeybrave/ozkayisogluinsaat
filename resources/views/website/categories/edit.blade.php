@extends('website.layouts.website')

@section('title', 'Kategori Düzenle')



@section("content")


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0 aktext">Kategori Düzenle Sayfası</h5>
                </div>
                <div class="card-body p-4">


                    <form method="post" action="{{ route("website.categories.update", $category->id) }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
@method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold aktext">Makale Başlık</label>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control @error('title') is-invalid @enderror">

                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold aktext">Açıklama</label>
                            <textarea name="description" cols="30" rows="4" class="form-control @error('description') is-invalid @enderror">{{ $category->description }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label for="image">Resim Yükle:</label>
                            <input type="file" name="image" id="category-image" class="form-control" accept="image/*">
                            @if ($category->image)
                                <div class="mt-3">
                                <img id="category-image-preview" src="{{ asset($category->image) }}" alt="{{ $category->name }}" style="width: 200px; height: auto; margin-top: 10px;">
                                </div>
                            @endif
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

@push('scripts')

    <script>
        document.getElementById('category-image').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('category-image-preview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result; // Yüklenen resmin verisini al
                    imagePreview.style.display = 'block'; // Önizleme alanını göster
                }
                reader.readAsDataURL(file); // Resmi oku
            } else {
                imagePreview.src = '#'; // Resim yoksa varsayılan değeri ayarla
                imagePreview.style.display = 'none'; // Önizleme alanını gizle
            }
        });
    </script>

@endpush
