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

//
//Route::get('/about', function () {
//    return "about page";
//});
//
//Route::get('/contact', function () {
//    return "contact page";
//});
//
//
//Route::get('/post/{id}/{name}', function ($id,$name) {
//    return "post number ".$id." ".$name;
//});
//
//Route::get('admin/post/expample', array('as'=>'admin.home', function(){
//
//
//    $url=route('admin.home');
//    return "this is ". $url;
//
//}));




//Route::get('/post/{id}', 'PostsController@index');



Route::get('/', function () {
    return view('welcome');
    //return "hello world";
});


Route::resource('posts','PostsController');

Route::get('/contact','PostsController@contact');

Route::get('/post/{id}/{name}/{pw}','PostsController@show_post');