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
        <h1>あなたの好きな映画は？？</h1>
        <form action="{{ action('Admin\ProfileController@movieSave') }}" method="post">
            タイトル：<input type="text" name="title"><br>
            感想：<input type="datetime-local" name="review"><br>
            星いくつ？：<input type="text" name="hogehoge"><br>
            {{ csrf_field() }}
            <input type="submit" value="送信！">
        </form>
    </body>
</html>