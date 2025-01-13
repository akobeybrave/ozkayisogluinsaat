<div
    class="tab-pane p-3 {{ $activeTab === 'contact' ? 'show active' : '' }}"
    id="navpill-222"
    role="tabpanel"
>
    <form action="{{ route('website.ayarlar.updateIletisimBilgileri') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="city">İl</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $setting->city ?? '' }}">
        </div>
        <div class="form-group">
            <label for="town">İlçe</label>
            <input type="text" class="form-control" id="town" name="town" value="{{ $setting->town ?? '' }}">
        </div>
        <div class="form-group">
            <label for="district">Mahalle</label>
            <input type="text" class="form-control" id="district" name="district" value="{{ $setting->district ?? '' }}">
        </div>
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $setting->address ?? '' }}">
        </div>
        <div class="form-group">
            <label for="tel">Telefon</label>
            <input type="text" class="form-control" id="tel" name="tel" value="{{ $setting->tel ?? '' }}">
        </div>
        <div class="form-group">
            <label for="mobile">Mobil</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ $setting->mobile ?? '' }}">
        </div>
        <div class="form-group">
            <label for="email_info">Merkez Email</label>
            <input type="text" class="form-control" id="email_info" name="email_info" value="{{ $setting->email_info ?? '' }}">
        </div>
        <div class="form-group">
            <label for="email_muhasebe">Muhasebe Email</label>
            <input type="text" class="form-control" id="email_muhasebe" name="email_muhasebe" value="{{ $setting->email_muhasebe ?? '' }}">
        </div>
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $setting->facebook ?? '' }}">
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $setting->instagram ?? '' }}">
        </div>
        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
