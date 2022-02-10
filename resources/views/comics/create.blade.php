@extends('layouts.base')

@section('title')
Creazione
@endsection

@section('pageContent')
<form action="{{route("comics.store")}}" method="POST" class="container my-5">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" required>
    </div>
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" required>
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo" required>
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" required>
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione" required>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci URL immagine">
    </div>
    <button type="submit" class="btn btn-primary">Inserisci</button>
</form>
@endsection