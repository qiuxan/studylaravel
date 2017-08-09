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

use App\Staff;
use App\Photo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create',function (){

    $staff = Staff::findOrFail(1);

    $staff->photos()->create(['pa th'=>'examp 1.jpg']);

});

Route::get('/read',function (){


    $staff=Staff::findOrFail(1);

    foreach ($staff->photos as $photo){


        echo $photo->path;

    }

});