@extends('layouts.app')

@section('custom-css')
<link rel="stylesheet" href="{{asset('css/prova.css')}}">
@endsection

@section('content')
<h1 class="text-center">Crea nuovo comic</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
<form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci comic" aria-describedby="titleHelper" value="{{old('title')}}">
          <small id="titleHelper" class="text-muted">Help text</small>
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="thumb">Immagine</label>
          <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Inserisci imagine" aria-describedby="thumbHelper" value="{{old('thumb')}}">
          <small id="thumbHelper" class="text-muted">Help text</small>
          @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="thumb">Cover image</label>
          <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Inserisci iimagine" aria-describedby="thumbHelper" value="{{old('thumb')}}">
          <small id="thumbHelper" class="text-muted">Help text</small>
          @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <label for="description">description</label>
        <div class="mb-3">
          <label for="description" class="form-label @error('description') is-invalid @enderror"></label>
          <textarea class="form-control" name="description" id="description" rows="6">
            {{old('description')}}
          </textarea>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add comic</button>
    </form>
</div>
    
    
    
@endsection