@extends('layout.app')

@section('headText', 'Dettaglio Comic')

@section('content')

<main class="dettaglio_comic">
    <div class="jumbotron"> </div>
    <div class="container_comic">
        <div class="text">
            <h2>{{$comic['title']}}</h2>
            <div class="prezzo">
                <span> US Price: {{$comic['price']}} </span>
                <span>AVAIABLE</span>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="cover">
            <img src="{{$comic['thumb']}}" alt="">
        </div>        
    </div>
    <section class="maggiori_info">
        <div class="autori">
            <div class="art_by">
                <h5>Art By:</h5>
                @foreach ($comic['artists'] as $item)
                    <span> {{ $item }},  </span>                    
                @endforeach
            </div>
            <div class="written_by">
                <h5>Written By:</h5>
                @foreach ($comic['writers'] as $item)
                    <span> {{ $item }}, </span>                    
                @endforeach
            </div>
        </div>
    </section>
</main>

@endsection