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
        <h1>{{ Auth::user()->name }}が投稿した映画一覧<h1>
        @foreach($my_movies as $movie)
         <h3>{{ $movie->title }}</h3>
         <p>{{ $movie->review }}</p>
         <p>{{ $movie->stars }}</p>
        @endforeach
        <h1>コントローラから渡した値を表示する</h2>
       {{ $test_message }}
        <p>{{ $test_movie->title }}</p>
        <p>{{ $test_movie->review }}</p>
        <p>{{ $test_movie->stars }}</p>
        @foreach($movies as $movie)
         <h3>{{ $movie->title }}</h3>
         <p>{{ $movie->review }}</p>
         <p>{{ $movie->stars }}</p>
        @endforeach
        <h2>星で検索した結果の映画一覧</h2>
        @foreach($searched_movies as $movie)
        <h3>{{ $movie->title }}</h3>
        <p>{{ $movie->review }}</p>
        <p>{{ $movie->stars }}</p>
        @endforeach
    </body>
</html>