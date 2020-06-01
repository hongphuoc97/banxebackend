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
    return view('welcome');
});
Route::resource('articles', 'ArticleController');
Route::resource('demo', 'DemoController');

Route::get('login', 'AuthenticationController@index');
Route::post('login', 'AuthenticationController@checklogin');
Route::get('logout', 'AuthenticationController@logout');

Route::get('users/register', function(){
    return view('users/create');
});
Route::post('users/register', 'Auth\RegisterController@register' );

Route::group(['prefix'=>'configuration'],
    function(){
    //index
        Route::get('',[
            'uses' => 'ConfigurationController@index',
            'as' => 'configuration.index'
        ]);
        Route::get('/update/{id}',[
            'uses' => 'ConfigurationController@update',
            'as' => 'configuration.update'
        ]);
        Route::post('/update/{id}',[
            'uses' => 'ConfigurationController@edit',
            'as' => 'configuration.edit'
        ]);
    }
);
