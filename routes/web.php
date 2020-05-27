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
Route::resource('articles','ArticleController');
Route::resource('demo','DemoController');
Route::get('test', 'DemoController@test');
Route::get('register', function() {
    return view('users.create');
});
Route::post('register', 'Auth\RegisterController@create');
Route::get('users', 'Auth\RegisterController@index');
// Route::get('foo', function () {
//   $articles = DB::table('articles')->get();
//   return view('articles.demo', ['articles' => $articles]);
// });
