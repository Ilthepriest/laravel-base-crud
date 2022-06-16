@extends('layouts.app')

@section('content')
<a href="{{route('comics.create')}}">Crea comic</a>
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
            <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
            <td><a href="{{route('comics.show', $comic->id)}}">View</a>- Edit - Delete</td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>

<!-- {{dd($comics)}} -->

@endsection