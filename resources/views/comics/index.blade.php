@extends('layouts.app')

@section('content')
<nav class="nav justify-content-center">
  <a class="nav-link active" href="{{route('comics.create')}}">Crea comic</a>
</nav>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>title</th>
            <th>description</th>
            <th>cover image</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <td><img width="70" src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img width="70" src="{{$comic->thumb}}" alt=""></td>
            <td><a href="{{route('comics.show', $comic->id)}}">View</a>- Edit - Delete</td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>



@endsection