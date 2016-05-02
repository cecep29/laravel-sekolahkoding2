<?php


Route::get('/', 'WelcomeController@index');
Route::get('/profil', 'ProfilController@index');
Route::get('/materi', 'MateriController@show');
Route::get('materi/{id}', 'MateriController@single');


    
