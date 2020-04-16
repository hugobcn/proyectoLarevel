/routes/


<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   
    return view('welcome');
});

Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');
