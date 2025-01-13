@extends("frontend.layouts.home")

@section("content")


    <section class="banner-section"
             style="background-image: url({{ asset('frontend/images/page-banner.webp') }});">
        <div class="auto-container">
            <div class="inner-container">
                <div class="content-box centred">
                    <h2>HAKKIMIZDA</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="about">
        <div class="container">

            <div class="left">
                <img src="assets/images/tadilat-1.webp" alt="" class="img-cover">
            </div>


            <div class="right">

                <p>
                    İnşaat sektöründe uzmanlaşmış firmamız, mimari çizimden su izolasyonuna, tadilattan detaylı yenileme çalışmalarına kadar geniş bir hizmet yelpazesi sunmaktadır. Uzman kadromuz ve yenilikçi yaklaşımımızla her projeye estetik, dayanıklılık ve işlevsellik kazandırmayı hedefliyoruz.
                </p>
                <br>
                <p>
                    Mimari çizim hizmetlerimizle hayallerinizi somut projelere dönüştürüyor, su izolasyonu çözümlerimizle yapılarınızı çevresel etkilere karşı koruyoruz. Tadilat projelerinde, yaşam alanlarınıza modern dokunuşlar yaparak işlevsel ve şık mekanlar oluşturuyoruz.
                </p>
                <br>
                <p>
                    Yüksek kalite standartlarımız ve müşteri odaklı yaklaşımımızla her detayı özenle ele alıyor, projelerinizi zamanında ve eksiksiz bir şekilde tamamlıyoruz. İnşaatta güven, estetik ve dayanıklılığı bir arada sunmak için buradayız!
                </p>

            </div>


        </div>
    </section>


@endSection
