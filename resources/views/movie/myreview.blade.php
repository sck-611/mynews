<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        
        <h2>{{ Auth::user()->email }}が投稿したレビュー映画一覧</h2>
        @foreach($my_movies as $movie)
        <h3>{{ $movie->title }}</h3>
        <p>{{ $movie->review }}</p>
        <p>{{ $movie->stars }}</p>
        @endforeach
    </body>
</html>