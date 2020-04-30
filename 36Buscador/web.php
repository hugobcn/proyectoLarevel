/App/routes 

<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   
    //return view('welcome');

  return view('auth.login');
  //return view('home');
    //return redirect()->action('HomeController@index');
    
});

Auth::routes();

//http://twitter-laravel.com/user/avatar/15872857762019-06-16-105708.jpg

Route::get('/gente/{search?}', 'UserController@index')->name('user.index');
