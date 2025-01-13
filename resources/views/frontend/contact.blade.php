@extends("frontend.layouts.home")

@section("content")


    <section class="banner-section"
             style="background-image: url({{ asset('frontend/images/page-banner.webp') }});">
        <div class="auto-container">
            <div class="inner-container">
                <div class="content-box centred">
                    <h2>İLETİŞİM</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="contact">
        <div class="container">


            <div class="left">

                <ul class="left-addres">

                    <li>
                        <div class="contact-map">
                            <i class="ri-map-pin-line ri-xl"></i>
                            <p>{{ $setting->district }}, {{ $setting->address }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-map">
                            <i class="ri-map-pin-line ri-xl"></i>
                            <p>{{ $setting->city }}/{{ $setting->town }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-map">
                            <i class="ri-phone-line ri-xl"></i>
                            <p>5{{ $setting->tel }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-map">
                            <i class="ri-phone-line ri-xl"></i>
                            <p>{{ $setting->mobile }}</p>
                        </div>
                    </li>

                    <li>
                        <div class="contact-map">
                            <i class="ri-mail-line ri-xl"></i>
                            <p>{{ $setting->email_info }}</p>
                        </div>
                    </li>
                    <li>
                        <div class="contact-map">
                            <i class="ri-mail-line ri-xl"></i>
                            <p>{{ $setting->email_muhasebe }}</p>
                        </div>
                    </li>


                    <li>
                        <div class="contact-map">
                            <i class="ri-instagram-line ri-xl"></i>
                            <p><a href="{{ $setting->instagram }}">Instagram</a></p>
                            <i class="ri-facebook-box-line ri-xl"></i>
                            <p><a href="{{ $setting->facebook }}">Facebook</a></p>
                        </div>
                    </li>


                </ul>

            </div>


            <div class="right">

                <form action="{{ route('send-email') }}" method="post">
                    @csrf
                    <input type="text" id="name" name="name" placeholder="İsim">
                    @error('name'){{ $message }}@enderror
                    <input type="email" id="email" name="email" placeholder="Email">
                    @error('email'){{ $message }}@enderror
                    <textarea id="message" name="message" placeholder="Mesaj" style="height:200px"></textarea>
                    @error('name'){{ $message }}@enderror
                  <button class="contact-form-btn" type="submit">Gönder</button>

                </form>
            </div>




        </div>
    </section>

    <div class="container">
        <iframe src="{{ $setting->google_map }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


@endSection
