<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    
    
    public function movieSave(Request $request /* Requestはユーザからの通信を取得する色んな便利プロパティやメソッドが実装されたクラス */)
    {
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->review = $request->review;
        $movie->stars = $request->hogehoge;
        $movie->save();
        return view('movie.create');
    }
    
    public function test()
    {
        $movie = new Movie;
        $movie->title = "バニラスカイ";
        $movie->review = "最高。傑作です。";
        $movie->stars = 5;
        $movie->save();
        return view('admin.profile.create');
    }

    public function showMovie()
    {
        $movie_from_db = Movie::find(1);
        $all_movies = Movie::all();
        $movies_searched_by_stars = Movie::where("stars",3)->get();
        return view('movie.show', ["test_message"=>"これはコントローラから渡されたメッセージです", 
                           'test_movie'=>$movie_from_db, 
                           'movies'=>$all_movies,
                           'searched_movies' => $movies_searched_by_stars]);
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
}
