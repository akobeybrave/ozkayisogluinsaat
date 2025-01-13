<section class="section cizim-section">
    <div class="container">

        <div class="cizim-left sr-left">

            <h3>{{ $mimari->title }}</h3>

            <P class="letter">
                {!! $mimari->description !!}
            </P>



            <div class="custom-ul">
                <ul>
                    <li class="arrow">
                        <span class="tad1">{{ $mimari->subtitle1 }}</span>
                        <p class="arrow-p">
                            {!! $mimari->description1 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad2">{{ $mimari->subtitle2 }}</span>
                        <p class="arrow-p">
                            {!! $mimari->description2 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad3">{{ $mimari->subtitle3 }}</span>
                        <p class="arrow-p">
                            {!! $mimari->description3 !!}
                        </p>
                    </li>

                </ul>
            </div>


        </div>

        <div class="cizim-right sr-right">
            <img src="{{ asset($mimari->frontimage1) }}" class="img-cover item item-1" alt="">
            <img src="{{ asset($mimari->frontimage2) }}" class="img-cover item item-2" alt="">
            <img src="{{ asset($mimari->frontimage3) }}" class="img-cover item item-3" alt="">

        </div>

    </div>
</section>
