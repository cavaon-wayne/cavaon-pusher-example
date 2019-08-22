<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/fire', 'HomeController@fire');
Route::get('/fire2', 'HomeController@fire2');

Route::get('/frame', function(){
    return view("frame");
});

Route::get('/client', 'HomeController@client');
