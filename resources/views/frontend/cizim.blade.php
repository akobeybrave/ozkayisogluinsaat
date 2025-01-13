@extends("frontend.layouts.home")

@section("content")


    <section class="banner-section"
             style="background-image: url({{ asset('frontend/images/page-banner.webp') }});">
        <div class="auto-container">
            <div class="inner-container">
                <div class="content-box centred">
                    <h2>{{ $page }}</h2>
                </div>
            </div>
        </div>
    </section>



    <section class="section cizim-page">
        <div class="container">


            <div class="eleven">
                <h1>{{ $mimari->title }}</h1>
            </div>

            <div class="cizim-content">

                {!! $mimari->pagedescription !!}
            </div>


            <div class="cizim-gallery">

                @foreach($mimariImages as $item)
                    <div class="grid__item">
                        <a href="{{ asset('uploads/mimariimages/large/' .$item->filename)}}" data-lightbox="image-1">
                            <img src="{{ asset('uploads/mimariimages/small/' .$item->filename)}}" alt="name" class="img-cover">
                        </a>
                    </div>
                @endforeach



            </div>


        </div>
    </section>


@endSection
