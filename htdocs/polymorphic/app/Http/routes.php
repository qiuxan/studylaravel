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

Route::get('/update',function (){


    $staff=Staff::findOrFail(1);

    $photo=$staff->photos()->whereId(1)->first();

    $photo->path="updated path.jpg";
    $photo->save();

});

Route::get('/delete',function (){

    $staff= Staff::findOrFail(1);

    $staff->photos()->whereId(1)->delete();


});


Route::get('/assign',function (){

   $staff=Staff::findOrFail(1);

   $photo=Photo::findOrFail(2);

   $staff->photos()->save($photo);

});

Route::get('/un-sign',function (){

    $staff=Staff::findOrFail(1);


    $staff->photos()->whereId(3)->update(['imageable_id'=>'','imageable_type'=>0]);

});