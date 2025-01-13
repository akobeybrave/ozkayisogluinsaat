<section class="section card-section">
    <div class="container">


        <div class="eleven">
            <h1>HİZMETLERİMİZ</h1>
        </div>

        <div class="service-cards">

            @foreach($categories as $category)
            <div class="card card1">
                <img
                    src="{{ asset($category->image) }}"
                    alt="Avatar"
                    style="width: 100%"
                />
                <div class="card-container">
                    <h3>{{ $category->name }}</h3>
                    <p>
                        {!! $category->description !!}
                    </p>

                    <a href="{{ $category->slug }}" class="button">Devamı</a>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</section>
