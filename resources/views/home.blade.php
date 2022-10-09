@extends('layout.app')

@section('headText', 'Homepage Comics')
    

@section('content')
<main class="homepage">
    <div class="jumbotron">

    </div>

    {{-- @php
    
    $comics = [
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ],
        [
            'src' => 'https://picsum.photos/seed/picsum/200/200',
            'titolo' => 'Action Comics'
        ]
    ]

    @endphp --}}

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
    
@endsection