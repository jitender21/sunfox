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
    //return view('welcome');
      return  redirect('/login');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::Controller('sunfox','SunfoxController');
Route::Controller('digital','DigitalController');
Route::Controller('manage','ManageController');
Route::Controller('profile','ProfileController');
Route::Controller('poster','PosterController');
Route::Controller('agile','AgileController');
