<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Movie;

class ProfileController extends Controller
{
    public function add()
    {
        $movie->title = "バニラスカイ";
        $movie->review = "最高。傑作です。";
        $movie->star = 5;
        $movie->save();
        
    }
    
    
    //
    // public function add()
    // {
    //     // $result1 = 100 + 100;
    //     // $result2 = 100 + 200;
    //     // dd($result1, $result2);
    //     return view('admin.profile.create');
    // }
    
    
    
    public function movieSave(Request $request /* Requestはユーザからの通信を取得する色んな便利プロパティやメソッドが実装されたクラス */)
    {
        $movie = new Movie;
        $movie->user_id = Auth::id();
        $movie->title = $request->title;
        $movie->review = $request->review;
        $movie->stars = $request->hogehoge;
        $movie->save();
        return view('movie.create');
    }
    
    public function test()
    {
        $movie = new Movie;
        
        dd($movie);
                //全く同じことをしている
                // $movie->title = "バニラスカイ";
                // $movie->review = "最高。傑作です。";
                // $movie->stars = 5;
        $movie->save();
        return view('admin.profile.create');
    }
    
    public function myreview()
    {
        
        return view("movie.myreview", ["my_movies"=>Movie::where("user_id", Auth::id())->get()]);
    }

    public function showMovie()
    {
        $movie_from_db = Movie::find(1);
        $all_movies = Movie::all();
        $movies_searched_by_stars = Movie::where("stars",3)->get();
        return view('movie.show', ["test_message"=>"これはコントローラから渡されたメッセージです", 
                           'my_movies' => Auth::user()->movies,
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
