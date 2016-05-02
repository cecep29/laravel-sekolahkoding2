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

//url, controller@action
Route::get('/', 'WelcomeController@index');

Route::get('/profil', 'WelcomeController@profil');

Route::get('/materi/html', 'MateriController@index');
    
