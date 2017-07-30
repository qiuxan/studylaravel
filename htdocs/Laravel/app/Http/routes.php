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
    return view('welcome');
    //return "hello world";
});

Route::get('/about', function () {
    return "about page";
});

Route::get('/contact', function () {
    return "contact page";
});


Route::get('/post/{id}/{name}', function ($id,$name) {
    return "post number ".$id." ".$name;
});
