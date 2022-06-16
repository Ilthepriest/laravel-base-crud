<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- @yield('custom-css') -->
    </head>
    <body>
        <header>
            <nav class="nav justify-content-center">
              <a class="nav-link active" href="{{route('home')}}">Home</a>
              <a class="nav-link" href="{{route('comics.index')}}">Comics</a>
            </nav>
            
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            
        </footer>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
