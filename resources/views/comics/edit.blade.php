@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/prova.css')}}">
@endsection

@section('content')
<h1 class="text-center">Edit {{$comic->title}}</h1>
<div class="container">
<form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci comic" aria-describedby="titleHelper" value="{{$comic->title}}">
          <small id="titleHelper" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
          <label for="thumb">Immagine</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci imagine" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
          <small id="thumbHelper" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
          <label for="thumb">Cover image</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci iimagine" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
          <small id="thumbHelper" class="text-muted">Help text</small>
        </div>

        <label for="description">description</label>
        <div class="mb-3">
          <label for="description" class="form-label"></label>
          <textarea class="form-control" name="description" id="description" rows="6">
            {{$comic->description}}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Upadate comic</button>
    </form>
</div>
    
    
    
@endsection