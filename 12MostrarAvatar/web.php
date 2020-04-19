/App/routes 


<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   
    //return view('welcome');

            return view('auth.login');
    
});

Auth::routes();

//http://twitter-laravel.com/user/avatar/15872857762019-06-16-105708.jpg

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');

