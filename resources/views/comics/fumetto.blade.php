<main class="fumetto">
    <div class="jumbotron"> </div>
    
    <div class="container">
        @forelse ($products as $comic)
            <article class="card">
                <img src="{{ $comic['thumb'] }}" :alt="">
                <h2> {{ $comic['title'] }} </h2>
            </article>            
        @empty
            <span> 'Non sono presenti articoli' </span>
        @endforelse
    </div>

</main>
    
