@extends('layouts.base')

@section('title')
Edit
@endsection

@section('pageContent')
<h1 class="my-5 mx-5">Modifica: {{$comic->title}}</h1>
<form action="{{route("comics.update", $comic->id)}}" method="POST" class="container my-5">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" required value="{{$comic->title}}">
    </div>
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" required value="{{$comic->series}}">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" required value="{{$comic->type}}">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" required value="{{$comic->price}}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" required value="{{$comic->description}}">
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci URL immagine" value="{{$comic->image}}">
    </div>
    <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection