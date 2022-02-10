@extends('layouts.base')

@section('title')
Comics
@endsection

@section('pageContent')
<div class="container my-5">
  <h1>Lista</h1>
  <a href="{{route("comics.create")}}" class="my-4"><button type="button" class="btn btn-success">Add</button></a>
  <table class="table my-4">
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
        <td class="d-flex">
          <a href="{{route("comics.show", $comic->id)}}" class="mx-2"><button type="button" class="btn btn-dark">View</button></a>
          <a href="{{route("comics.edit", $comic->id)}}" class="mx-2"><button type="button" class="btn btn-info">Edit</button></a>
          <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="sumbit" class="btn btn-danger mx-2">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection