<footer class="footer">
    <div class="container">

        <div class="footer-top">

            <div class="footer-brand">
                <h4 class="brand">
                    {{ $setting->brand }}
                </h4>
                <p class="footer-text">
                    İnşaat sektöründe uzmanlaşmış firmamız, mimari çizim su izolasyonu ve tadilat alanlarında geniş bir hizmet yelpazesi sunmaktadır.
                </p>


            </div>




            <ul class="footer-list">
                <li><p class="footer-lit-title">Linkler</p></li>
                <li><a href="{{ route('home') }}" class="footer-link">Anasayfa</a></li>
                <li><a href="{{ route('tadilat') }}" class="footer-link">Tadilat</a></li>
                <li><a href="{{ route('cizim') }}" class="footer-link">Mimari Çizim</a></li>
                <li><a href="{{ route('izolasyon') }}" class="footer-link">İzolasyon</a></li>
                <li><a href="{{ route('about') }}" class="footer-link">Hakkımızda</a></li>
                <li><a href="{{ route('contact') }}" class="footer-link">İletişim</a></li>
            </ul>


            <ul class="footer-list-2">
                <li><p class="footer-lit-title">Hizmetlerimiz</p></li>
                <li><a href="{{ route('cizim') }}" class="footer-link">Mimari Çizimler</a></li>
                <li><a href="{{ route('izolasyon') }}" class="footer-link">Su İzalasyonu</a></li>
                <li><a href="{{ route('tadilat') }}" class="footer-link">Tadilat</a></li>
            </ul>



            <div class="adress">
                <ul class="footer-list">
                    <li><p class="footer-lit-title">Adres</p></li>
                    <li>{{ $setting->district }}</li>
                    <li>{{ $setting->address }}</li>
                    <li>{{ $setting->city }}/{{ $setting->town }}</li>
                    <li>Tel: {{ $setting->tel }}</li>
                    <li>Cep: {{ $setting->mobile }}</li>
                </ul>
                <div class="face-insta">
                    <a href="{{ $setting->instagram }}" class="footer-link"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="{{ $setting->facebook }}" class="footer-link"><ion-icon name="logo-facebook"></ion-icon></a>
                </div>


            </div>

        </div>


    </div>
</footer>

<div class="footer-bottom">

    <div class="container">


        <a href="https://www.ozkayisogluinsaat.com/" class="copy">
            Copyright 2024.  ÖZ KAYIŞOĞLU İNŞAAT
        </a>


        <a href="https://manavgatwebtasarim.net/" class="webmaster">Manavgat Web tasarım</a>

    </div>


</div>
