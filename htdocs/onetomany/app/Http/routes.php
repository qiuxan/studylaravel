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

use App\Post;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',function (){

    $user=User::findOrFail(1);

    $post= new Post(['title'=>'my first post title 2', 'body'=>'body of 2nd post']

    );

    $user->posts()->save($post);


});


Route::get('/read',function (){

   $user=User::findOrFail(1);

   foreach ($user->posts as $post){

       echo $post->title.'<br>';

   }

//    dd($user);

});

Route::get('/update', function(){

    $user=User::findOrFail(1);

//    $user->posts()->whereId(1)->update(['title'=>'updated title 1', 'body'=>'updated body 1']);

    $user->posts()->where('id','=',2)->update(['title'=>'updated title 2 ', 'body'=>'updated body 2']);



});


Route::get('/delete',function (){

   $user = User::findOrFail(1);

   //print_r($user);

  $user->posts()->whereId(1)->delete();

});