<section class="hero-slide">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @foreach($heroDatas as $item)

            <div class="swiper-slide">
                <img src="{{ asset($item->hero_image) }}" alt="">
                <div class="slide-content">
                    <div class="slide-content-inner">
                        <h2 class="from-left">{{ $item->hero_title }}</h2>
                        <h3 class="from-right">{{ $item->hero_subtitle }}</h3>
                        <p class="from-to-up">
                            {{ $item->hero_slogan }}
                        </p>
                        <div class="slide-cta">
                            <div class="tlf"></div>
                            <a href="tel:{{ $setting->mobile_site }}" class="slide-btn gradient-btn">
                                {{ $setting->mobile }}<i class="ri-phone-fill"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach


        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
