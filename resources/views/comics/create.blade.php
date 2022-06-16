@extends('layouts.app')

@section('content')
<h1>Crea nuovo comic</h1>
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
          <label for="cover_image">Cover image</label>
          <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="Inserisci iimagine" aria-describedby="cover_imageHelper">
          <small id="cover_imageHelper" class="text-muted">Help text</small>
        </div>

        <label for="description">description</label>
        <textarea name="description" name="description" id="description" cols="100" rows="10"></textarea>
        <button type="submit">Add comic</button>
    </form>
    
    
@endsection