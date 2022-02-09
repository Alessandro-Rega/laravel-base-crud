@extends('layouts.base')

@section('title')
Comics
@endsection

@section('pageContent')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Series</th>
        <th scope="col">Type</th>
        <th scope="col">Price</th>
        <th scope="col">View</th>
      </tr>
    </thead>
    <tbody>
    @foreach($comics as $comic)
      <tr>
        <th scope="row">{{$comic->id}}</th>
        <td>{{$comic->title}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->type}}</td>
        <td>{{$comic->price}}</td>
        <td><a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-dark">View</button></a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection