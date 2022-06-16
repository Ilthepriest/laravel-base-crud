@extends('layouts.app')

@section('content')

    <img  src="{{$comic->thumb}}" alt="">
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>

@endsection