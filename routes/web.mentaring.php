<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/movie', function () {
    return view('movie.create');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');    //テキストPHP15 『投稿したニュース一覧を表示しよう』より
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
}); 
Route::post('movie', 'Admin\ProfileController@movieSave');

Route::get("/saveMovie", "Admin\ProfileController@test");
Route::get("/showMovie", "Admin\ProfileController@showMovie");
Route::get("/myreview", "Admin\ProfileController@myreview");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


