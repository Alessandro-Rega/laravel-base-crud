@extends('layouts.base')

@section('title')
Scheda Comics
@endsection

@section('pageContent')
<div class="text-center mx-5">
    <h1 class="mt-4">{{$comics->title}}</h1>
    <img class="my-4" src="{{$comics->image}}" alt="{{$comics->title}}">
    <p>{{$comics->description}}</p>
    <h4>{{$comics->price}} &euro;</h4>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-dark">Return</button></a>
</div>
@endsection