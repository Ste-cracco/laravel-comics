<main class="fumetto">
    <div class="jumbotron"> </div>
    <div class="single_comic_container">
        @foreach ($products as $comic)
        <div class="single_comic">
            <div class="text_container">
                <h2> {{$comic['title']}} </h2>
                <span> {{$comic['price']}} </span>
                <p> {{$comic['description']}} </p>
            </div>
            <div class="img_container">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="container_dettagli">
                <div class="talent flex">
                    
                </div>
                <div class="specs">
                    <div class="series">
                        <h5>Series:</h5>
                        <p> {{ $comic['series'] }} </p>
                    </div>
                    <div class="us_price">
                        <h5>US Price:</h5>
                        <p> {{ $comic['price'] }} </p>
                    </div>
                    <div class="on_sale_date">
                        <h5>On Sale Date:</h5>
                        <p> {{ $comic['sale_date'] }} </p>
                    </div>
                </div>

            </div>
        </div>
            
        @endforeach

    </div>

</main>
    
