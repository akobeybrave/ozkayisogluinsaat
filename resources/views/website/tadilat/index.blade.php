@extends('website.layouts.website')

@section('title', 'Kategoriler')

<style>
    .tadilatFrontImages{
        display: grid;
        gap: 30px;
        grid-template-columns: repeat(auto-fill, minmax(250px, auto));
    }
    .tadilatBackImages{
        display: grid;
        gap: 30px;
        grid-template-columns: repeat(auto-fill, minmax(200px, auto));
    }
</style>

@section('content')

    <div class="card">
        <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'frontendText' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#frontendText"
                        role="tab"
                    >
                        <span>Tadilat Ön Yüz Metinler</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'frontendImage' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#frontendImage"
                        role="tab"
                    >
                        <span>Tadilat Ön Yüz Resimler</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'backendText' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#backendText"
                        role="tab"
                    >
                        <span>Tadilat Sayfa Metinler</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link {{ $activeTab === 'backendImage' ? 'active' : '' }}"
                        data-bs-toggle="tab"
                        href="#backendImage"
                        role="tab"
                    >
                        <span>Tadilat Sayfa Resimler</span>
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content border mt-2">

                <div
                    class="tab-pane p-3 {{ $activeTab === 'frontendText' ? 'show active' : '' }}"
                    id="frontendText"
                    role="tabpanel"
                >

                    <form method="post" action="{{ route("website.tadilat-update") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fw-semibold aktext">Üst Başlık</label>
                            <input type="text" name="title" value="{{ $tadilat->title }}" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="frontcontent" class="form-label">Açıklama</label>

                            <textarea  class="form-control @error('description') is-invalid @enderror" name="description" rows="4" cols="6">{{ $tadilat->description }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtitle1" class="form-label fw-semibold aktext">Alt Başlık 1</label>
                            <input type="text" name="subtitle1" value="{{ $tadilat->subtitle1 }}" class="form-control @error('subtitle1') is-invalid @enderror">
                            @error('subtitle1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description1" class="form-label">Açıklama 1</label>
                            <textarea  class="form-control @error('description1') is-invalid @enderror" name="description1" rows="4" cols="6">{{ $tadilat->description1 }}</textarea>
                            @error('description1')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle2" class="form-label fw-semibold aktext">Alt Başlık 2</label>
                            <input type="text" name="subtitle2" value="{{ $tadilat->subtitle2 }}" class="form-control @error('subtitle2') is-invalid @enderror">
                            @error('subtitle2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="description2" class="form-label">Açıklama 2</label>
                            <textarea  class="form-control @error('description2') is-invalid @enderror" name="description2" rows="4" cols="6">{{ $tadilat->description2 }}</textarea>
                            @error('description2')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="subtitle3" class="form-label fw-semibold aktext">Alt Başlık 3</label>
                            <input type="text" name="subtitle3" value="{{ $tadilat->subtitle3 }}" class="form-control @error('subtitle3') is-invalid @enderror">
                            @error('subtitle3')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description3" class="form-label">Açıklama 3</label>
                            <textarea  class="form-control @error('description3') is-invalid @enderror" name="description3" rows="4" cols="6">{{ $tadilat->description3 }}</textarea>
                            @error('description3')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-send-plane-fill ri-lg"></i>
                            <span>Güncelle</span>
                        </button>

                    </form>


                </div>

                <div
                    class="tab-pane p-3 {{ $activeTab === 'frontendImage' ? 'show active' : '' }}"
                    id="frontendImage"
                    role="tabpanel"
                >

                    <div class="tadilatFrontImages">


                <form method="post" action="{{ route("website.tadilat-resim1-update") }}" class="mt-6" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="frontimage1">Önsayfa Resim 1</label>
                                <input type="file" name="frontimage1" id="image1" class="form-control" accept="image/*">
                                @if ($tadilat->frontimage1)
                                    <div class="mt-3">
                                        <img id="image-preview1" src="{{ asset($tadilat->frontimage1) }}"  alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                                <i class="ri-send-plane-fill ri-lg"></i>
                                <span>Güncelle</span>
                            </button>
                        </form>


                <form method="post" action="{{ route("website.tadilat-resim2-update") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="frontimage2">Önsayfa Resim 2</label>
                            <input type="file" name="frontimage2" id="image2" class="form-control" accept="image/*">
                            @if ($tadilat->frontimage2)
                                <div class="mt-3">
                                    <img id="image-preview2" src="{{ asset($tadilat->frontimage2) }}" alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-send-plane-fill ri-lg"></i>
                            <span>Güncelle</span>
                        </button>
                    </form>


                <form method="post" action="{{ route("website.tadilat-resim3-update") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="frontimage3">Önsayfa Resim 3</label>
                            <input type="file" name="frontimage3" id="image3" class="form-control" accept="image/*">
                            @if ($tadilat->frontimage3)
                                <div class="mt-3">
                                    <img id="image-preview3" src="{{ asset($tadilat->frontimage3) }}" alt="resim" style="width: 200px; height: auto; margin-top: 10px;">
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

                <div
                    class="tab-pane p-3 {{ $activeTab === 'backendText' ? 'show active' : '' }}"
                    id="backendText"
                    role="tabpanel"
                >

                    <form method="post" action="{{ route("website.tadilat-page-update") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="pagedescription" class="form-label">Sayfa Açıklama</label>
                            <textarea  class="form-control @error('pagedescription') is-invalid @enderror" name="pagedescription" rows="8" cols="6">{{ $tadilat->pagedescription }}</textarea>
                            @error('pagedescription')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-send-plane-fill ri-lg"></i>
                            <span>Güncelle</span>
                        </button>

                    </form>


                </div>

                <div
                    class="tab-pane p-3 {{ $activeTab === 'backendImage' ? 'show active' : '' }}"
                    id="backendImage"
                    role="tabpanel"
                >

                    <div class="card">
                        <div class="card-body">
                    <form method="post" action="{{ route("website.tadilat-images-store") }}" class="mt-6" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control @error('images') is-invalid @enderror" name="images[]" multiple required>
                        <button type="submit" class="mt-4 btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                            <i class="ri-send-plane-fill ri-lg"></i>
                            <span>Yükle</span>
                        </button>
                    </form>
                </div>
            </div>

                    <div class="card">
                        <div class="card-body">

                    <form action="{{ route('website.tadilat-images-delete') }}" method="POST">
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

                        <br>
                        <hr>
                                <div class="tadilatBackImages">
                                @foreach($tadilatImages->chunk(4) as $chunk)

                                        @foreach ($chunk as $image)
                                        <div>
                                            <div class="form-check">
                                                <input class="form-check-input contact-chkbox primary" type="checkbox" name="images[]" value="{{ $image->id }}">
                                            </div>
                                                <img src="{{ asset($image->filepath) }}" alt="{{ $image->images }}" class="w-100">
                                            </div>
                                        @endforeach

                                @endforeach
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
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


