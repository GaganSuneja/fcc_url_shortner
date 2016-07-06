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

Route::get('/', function () {
    return view('home');
});

Route::get('/new/{url}','Controller@short_url')->where('url','.*\w+');

Route::get('/{short_url}','Controller@redirect_url')->where('short_url','[0-9]+');



