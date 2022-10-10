@extends('layout.app')

@section('headText', 'Dettaglio Comic')

@section('content')

<div class="container">
    <img src="{{$comic['thumb']}}" alt="">
    <h2>{{$comic['title']}}</h2>
    <p>{{$comic['description']}}</p>
    <span> {{$comic['price']}} </span>
</div>

@endsection