<div
    class="tab-pane p-3 {{ $activeTab === 'media' ? 'show active' : '' }}"
    id="navpill-333"
    role="tabpanel"
>
    <div class="row">
        <form method="post" action="{{ route('website.settings.logo.update') }}" class="mt-6" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="logo" class="form-label fw-semibold aktext">Logo</label>
                <input onchange="loadFile(event)"
                       type="file"
                       accept="image/*"
                       class="form-control @error('logo') is-invalid @enderror"
                       id="logo"
                       name="logo">
                @error('logo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img id="output" style="width: 200px; margin-top: 20px" src="{{ "/uploads/logos/" . $setting->logo }}" />
            </div>


            {{-- Buttons --}}
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                    <i class="ri-send-plane-fill ri-lg"></i>
                    <span>Güncelle</span>
                </button>
            </div>
            {{-- Buttons --}}

        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <div class="row">
        <form method="post" action="{{ route('website.settings.favicon.update') }}" class="mt-6" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="favicon" class="form-label fw-semibold aktext">Favicon</label>
                <input onchange="loadFile(event)"
                       type="file"
                       accept="image/*"
                       class="form-control @error('favicon') is-invalid @enderror"
                       id="favicon"
                       name="favicon">
                @error('favicon')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <img id="output" style="width: 80px; margin-top: 20px" src="{{ "/uploads/logos/" . $setting->favicon }}" />
            </div>



            {{-- Buttons --}}
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success font-medium px-4 d-flex align-items-center justify-content-between gap-2">
                    <i class="ri-send-plane-fill ri-lg"></i>
                    <span>Güncelle</span>
                </button>
            </div>
            {{-- Buttons --}}

        </form>
    </div>
</div>
