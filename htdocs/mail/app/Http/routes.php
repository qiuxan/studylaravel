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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');

    $data=[

        'title'=>'hi hello world',

        'content'=>'this is the content'


    ];

    Mail::send('email.test',$data,function ($message){

        $message->to('qiuxan@gmail.com','xianqiu')->subject('hello its me');

    });


});
