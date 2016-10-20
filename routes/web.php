<?php

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return "About";
});


Route::get('/{id}', function ($id) {
    return "id=".$id;
});
*/

//Route::get('/{id}', 'PostController@index');

Route::resource('posts', 'PostController');

Route::get('/contact', 'PostController@contact');

Route::get('post/{id}/{name}/{password}', 'PostController@show_post');
