<div
    class="tab-pane p-3 {{ $activeTab === 'site' ? 'show active' : '' }}"
    id="navpill-111"
    role="tabpanel"
>

    <form action="{{ route('website.ayarlar.updateSiteBilgileri') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="site_adi">Site Sahibi</label>
            <input type="text" class="form-control" id="owner" name="owner" value="{{ $setting->owner ?? '' }}">
        </div>
        <div class="form-group">
            <label for="brand">Site Marka</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $setting->brand ?? '' }}">
        </div>
        <div class="form-group">
            <label for="url">Site Url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ $setting->url ?? '' }}">
        </div>
        <div class="form-group">
            <label for="title">Site Başlığı</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $setting->title ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>

</div>

