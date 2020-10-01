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
use App\Categories;
use Illuminate\Http\Request;

  //MainController
  Route::resource('/', 'MainController');
  Route::post('/uploadfile/{id}', 'MainController@uploadfile');
  Route::get('/product', function () {
      return view('products');
  });

  //CLient product
  Route::resource('/product', 'ProductController');

  //Static page
  Route::get('/introduce', function () {
      return view('introduce');
  });
  Route::get('/contact', function () {
      return view('contact');
  });
  
  Route::get('/download/file/glasstype/1040', function () {
      return response()->download(storage_path("app/public/glasstype.png"));
  });
  
  //Admin manipulation
  Route::resources([
    'admin/' => 'AdminController',
    'admin/category' => 'CategoryController',
    'admin/product' => 'AdminProductController',
    'admin/config' => 'ConfigurationController',
    'admin/specifications' => 'SpecificationsController'
  ]);

  //login & logout
  Route::get('login', 'AuthenticationController@index');
  Route::post('/login', 'AuthenticationController@checklogin');
  Route::get('logout', 'AuthenticationController@logout');

  //Register user
  Route::get('users/register', function(){
      return view('users/create');
  });
  Route::post('users/register', 'Auth\RegisterController@register' );
?>
