@extends('website.layouts.website')

@section('title', 'Kategoriler')



@section('content')

<div class="container">

    <div style="text-align: center">
        <h3 class="mb-0">İZOLASYON ÖN SAYFA DÜZENİ</h3>
    </div>




    <hr>
    <h4>Ön Sayfa Metinler</h4>
    <hr>

    {{-- BÖLÜM 1 --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card w-100">
            <div class="card-body">
                <form method="post" action="{{ route("website.izolasyon-update") }}" class="mt-6" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold aktext">Üst Başlık</label>
                        <input type="text" name="title" value="{{ $izolasyon->title }}" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="frontcontent" class="form-label">Açıklama</label>

                        <textarea  class="form-control @error('description') is-invalid @enderror" name="description" rows="4" cols="6">{{ $izolasyon->description }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle1" class="form-label fw-semibold aktext">Alt Başlık 1</label>
                        <input type="text" name="subtitle1" value="{{ $izolasyon->subtitle1 }}" class="form-control @error('subtitle1') is-invalid @enderror">
                        @error('subtitle1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description1" class="form-label">Açıklama 1</label>
                        <textarea  class="form-control @error('description1') is-invalid @enderror" name="description1" rows="4" cols="6">{{ $izolasyon->description1 }}</textarea>
                        @error('description1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle2" class="form-label fw-semibold aktext">Alt Başlık 2</label>
                        <input type="text" name="subtitle2" value="{{ $izolasyon->subtitle2 }}" class="form-control @error('subtitle2') is-invalid @enderror">
                        @error('subtitle2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description2" class="form-label">Açıklama 2</label>
                        <textarea  class="form-control @error('description2') is-invalid @enderror" name="description2" rows="4" cols="6">{{ $izolasyon->description2 }}</textarea>
                        @error('description2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle3" class="form-label fw-semibold aktext">Alt Başlık 3</label>
                        <input type="text" name="subtitle3" value="{{ $izolasyon->subtitle3 }}" class="form-control @error('subtitle3') is-invalid @enderror">
                        @error('subtitle3')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description3" class="form-label">Açıklama 3</label>
                        <textarea  class="form-control @error('description3') is-invalid @enderror" name="description3" rows="4" cols="6">{{ $izolasyon->description3 }}</textarea>
                        @error('description3')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="pagedecription" class="form-label">Sayfa Açıklama</label>
                        <textarea  class="form-control @error('pagedecription') is-invalid @enderror" name="pagedecription" rows="8" cols="6">{{ $izolasyon->pagedecription }}</textarea>
                        @error('pagedecription')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                        <i class="ri-send-plane-fill ri-lg"></i>
                        <span>Güncelle</span>
                    </button>

                </form>

            </div>
        </div>
        </div>
    </div>
    {{-- BÖLÜM 1 --}}

    <hr>
    <h4>Ön Sayfa Resimler</h4>
    <hr>

    {{-- BÖLÜM 2 --}}
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
            <form method="post" action="{{ route("website.izolasyon-resim1-update") }}" class="mt-6" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="frontimage1">Önsayfa Resim 1</label>
                    <input type="file" name="frontimage1" id="image1" class="form-control" accept="image/*">
                    @if ($izolasyon->frontimage1)
                        <div class="mt-3">
                            <img class="w-100" id="image-preview1" src="{{ asset($izolasyon->frontimage1) }}" alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                    <i class="ri-send-plane-fill ri-lg"></i>
                    <span>Güncelle</span>
                </button>
            </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
            <form method="post" action="{{ route("website.izolasyon-resim2-update") }}" class="mt-6" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="frontimage2">Önsayfa Resim 2</label>
                    <input type="file" name="frontimage2" id="image2" class="form-control" accept="image/*">
                    @if ($izolasyon->frontimage2)
                        <div class="mt-3">
                            <img class="w-100" id="image-preview2" src="{{ asset($izolasyon->frontimage2) }}" alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                    <i class="ri-send-plane-fill ri-lg"></i>
                    <span>Güncelle</span>
                </button>
            </form>
        </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
            <form method="post" action="{{ route("website.izolasyon-resim3-update") }}" class="mt-6" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="frontimage3">Önsayfa Resim 3</label>
                    <input type="file" name="frontimage3" id="image3" class="form-control" accept="image/*">
                    @if ($izolasyon->frontimage3)
                        <div class="mt-3">
                            <img class="w-100" id="image-preview3" src="{{ asset($izolasyon->frontimage3) }}" alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                    <i class="ri-send-plane-fill ri-lg"></i>
                    <span>Güncelle</span>
                </button>
            </form>
        </div>
                    </div>
                </div>
    </div>
    {{-- BÖLÜM 2 --}}


    <hr>
    <h4>Arka Sayfa Resimler</h4>
    <hr>

    {{-- BÖLÜM 3 --}}
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route("website.izolasyon-images-store") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control @error('images') is-invalid @enderror" name="images[]" multiple required>
                        <button type="submit" class="mt-4 btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-send-plane-fill ri-lg"></i>
                            <span>Yükle</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- BÖLÜM 3 --}}




    {{-- BÖLÜM 4 --}}
    <div class="row">
        <div class="gallery">
            <form action="{{ route('website.izolasyon-images-delete') }}" method="POST">
                @csrf
                @method('DELETE')


                <button type="button" id="select-all" onclick="toggleSelectAll()" class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-primary">
                    Tümünü Seç
                </button>

                <button type="button" id="deselect-all" onclick="deselectAll()" class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-success" style="display: none;">
                    Tümünü Kaldır
                </button>



                <button type="submit" class="btn mb-1 waves-effect waves-light btn-rounded btn-outline-danger">
                    Seçilenleri Sil
                </button>

                <div class="container">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($izolasyonImages->chunk(4) as $chunk)
                            <tr>
                                @foreach ($chunk as $image)
                                    <td>
                                        <input type="checkbox" name="images[]" value="{{ $image->id }}">
                                    </td>
                                    <td>
                                        <img src="{{ asset($image->filepath) }}" alt="{{ $image->images }}" width="100">
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

            </form>
        </div>
    </div>
    {{-- BÖLÜM 4 --}}

</div>


@endsection

@push('scripts')
    <script>
        // Tümünü Seç / Tümünü Kaldır işlevselliği
        function toggleSelectAll() {
            const checkboxes = document.querySelectorAll('input[name="images[]"]');
            const selectAllButton = document.getElementById('select-all');
            const deselectAllButton = document.getElementById('deselect-all');

            if (selectAllButton.textContent === "Tümünü Seç") {
                checkboxes.forEach(checkbox => checkbox.checked = true);
                selectAllButton.textContent = "Tümünü Kaldır";
                deselectAllButton.style.display = 'none';
            } else {
                checkboxes.forEach(checkbox => checkbox.checked = false);
                selectAllButton.textContent = "Tümünü Seç";
                deselectAllButton.style.display = 'none';
            }
        }

        // Tümünü Kaldır işlevselliği
        function deselectAll() {
            const checkboxes = document.querySelectorAll('input[name="images[]"]');
            const selectAllButton = document.getElementById('select-all');
            const deselectAllButton = document.getElementById('deselect-all');

            checkboxes.forEach(checkbox => checkbox.checked = false);
            selectAllButton.textContent = "Tümünü Seç";
            deselectAllButton.style.display = 'none';
        }
    </script>
@endpush


@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush


@push('scripts')
    <script>
        document.getElementById('image1').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image-preview1');
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


@push('scripts')
    <script>
        document.getElementById('image2').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image-preview2');
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

@push('scripts')
    <script>
        document.getElementById('image3').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image-preview3');
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


