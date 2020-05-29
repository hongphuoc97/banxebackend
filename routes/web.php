<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------ --------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/products/detail', function () {
    return view('productsdetail');
});
Route::get('/introduce', function () {
    return view('introduce');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', function () {
  if (Auth::check())
  {
    return view('admin_index');
  }else{
    return redirect('login');
  }
});
Route::resource('articles', 'ArticleController');
Route::resource('demo', 'DemoController');

Route::get('login', 'AuthenticationController@index');
Route::post('/login', 'AuthenticationController@checklogin');
Route::get('logout', 'AuthenticationController@logout');

Route::get('users/register', function(){
    return view('users/create');
});
Route::post('users/register', 'Auth\RegisterController@register' );
?>
