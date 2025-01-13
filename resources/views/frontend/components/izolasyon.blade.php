<section class="section izolasyon-section">
    <div class="container">

        <div class="izolasyon-left sr-left">
            <img src="{{ asset($izolasyon->frontimage1) }}" class="img-cover item item-1" alt="">
            <img src="{{ asset($izolasyon->frontimage2) }}" class="img-cover item item-2" alt="">
            <img src="{{ asset($izolasyon->frontimage3) }}" class="img-cover item item-3" alt="">
       </div>

        <div class="izolasyon-right sr-right">
            <h3 class="tadh3">{{ $izolasyon->title }}</h3>

            <P class="letter">
                {!! $izolasyon->description !!}
            </P>


            <div class="custom-ul">
                <ul>
                    <li class="arrow">
                        <span class="tad1">{{ $izolasyon->subtitle1 }}</span>
                        <p class="arrow-p">
                            {!! $izolasyon->description1 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad2">{{ $izolasyon->subtitle2 }}</span>
                        <p class="arrow-p">
                            {!! $izolasyon->description2 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad3">{{ $izolasyon->subtitle3 }}</span>
                        <p class="arrow-p">
                            {!! $izolasyon->description3 !!}
                        </p>
                    </li>

                </ul>
            </div>


        </div>

    </div>
</section>
