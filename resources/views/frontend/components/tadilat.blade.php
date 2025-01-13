<section class="section tadilat-section">
    <div class="container">

        <div class="tadilat-left sr-left">
            <img src="{{ asset($tadilat->frontimage1) }}" class="img-cover item item-1" alt="">
            <img src="{{ asset($tadilat->frontimage2) }}" class="img-cover item item-2" alt="">
            <img src="{{ asset($tadilat->frontimage3) }}" class="img-cover item item-3" alt="">

        </div>

        <div class="tadilat-right sr-right">

            <h3 class="tadh3">{{ $tadilat->title }}</h3>

            <P class="letter">
                {!! $tadilat->description !!}
            </P>

            <div class="custom-ul">
                <ul>
                    <li class="arrow">
                        <span class="tad1">{{ $tadilat->subtitle1 }}</span>
                        <p class="arrow-p">
                            {!! $tadilat->description1 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad2">{{ $tadilat->subtitle2 }}</span>
                        <p class="arrow-p">
                            {!! $tadilat->description2 !!}
                        </p>
                    </li>
                    <li class="arrow">
                        <span class="tad3">{{ $tadilat->subtitle3 }}</span>
                        <p class="arrow-p">
                            {!! $tadilat->description3 !!}
                        </p>
                    </li>

                </ul>
            </div>


        </div>

    </div>
</section>
