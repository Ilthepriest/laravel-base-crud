@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/prova.css')}}">
@endsection

@section('content')
<h1 class="text-center">Crea nuovo comic</h1>
<div class="container">
<form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci comic" aria-describedby="titleHelper">
          <small id="titleHelper" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
          <label for="thumb">Immagine</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci imagine" aria-describedby="thumbHelper">
          <small id="thumbHelper" class="text-muted">Help text</small>
        </div>

        <div class="form-group">
          <label for="thumb">Cover image</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Inserisci iimagine" aria-describedby="thumbHelper">
          <small id="thumbHelper" class="text-muted">Help text</small>
        </div>

        <label for="description">description</label>
        <div class="mb-3">
          <label for="description" class="form-label"></label>
          <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add comic</button>
    </form>
</div>
    
    
    
@endsection