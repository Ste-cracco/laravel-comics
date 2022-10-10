<main class="fumetto">
    <div class="jumbotron"> </div>
    
    <div class="container">
        @forelse ($products as $comic)
        <a href="{{ route('single_comic', ['id' => $loop->index]) }}">
            <article class="card">
                <img src="{{ $comic['thumb'] }}" :alt="">
                <h2> {{ $comic['title'] }} </h2>
            </article> 
        </a>           
        @empty
            <span> 'Non sono presenti articoli' </span>
        @endforelse
    </div>

</main>
    
