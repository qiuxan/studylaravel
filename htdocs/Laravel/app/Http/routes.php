<?php
use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
use App\User;

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
//
//
//Route::resource('posts','PostsController');
//
//Route::get('/contact','PostsController@contact');
//
//Route::get('/post/{id}/{name}/{pw}','PostsController@show_post');


///*application routes*/
//
//
//Route::get('/insert',function(){
//
//    //DB::insert('insert into posts(title, content) values(?, ?)', ['PHP With Laravel', 'Laravel is the best thing that has happened to PHP']);
//    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to php']);
//});

Route::get('/insert', function(){

   DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to php']);

    return 'works';
});

//DATABASE Raw SQL Queries

//Route:get('/read', function(){
//    $results=DB::select('select * from posts where id=?',[1]);
//
//    //return $results;
//    print_r($results);
//
//});

//Route::get('/update', function(){
//
//     $update= DB::update('update posts set title ="update title" where id=?',[1]);
//     return $update;
//});

//Route::get('/delete', function(){
//   $delete=DB::delete('delete from posts where id =?', [1]);
//   return $delete;
//});

//Route::get('/read', function(){
//
//    $posts=Post::all();
//
//    foreach ($posts as $post){
//
//        return $post->title;
//    }
//
//});


//Route::get('/find', function(){
//
//    $post=Post::find(1);
//
//   return $post->title;
//
//});

//Route::get('/findwhere', function(){
//
//    $posts= Post::where('id',13)->orderBy('id','desc')->take(1)->get();
//
//    return $posts;
//
//});
//
//Route::get('/basicinsert',function(){
//
//   $post =new Post;
//   $post->title='New Eloquent title insert';
//   $post->content='new eloquent is really cool';
//    $post->save();
//});


//Route::get('/basicinsert2',function(){
//
//    $post =Post::find(1);
//
//    $post->title='New Eloquent title insert2';
//    $post->content='new eloquent is really cool2';
//    $post->save();
//});

Route::get('/create',function(){

    Post::create(['title'=>'the create method', 'content'=>'Wow I am learning']);

});


//Route::get('/update',function(){
//
//    Post::where('id',1 )-> where('is_admin',0)->update(['title'=>'New Php Title', 'content'=>'the new php content']);
//
//});
//
//Route::get('/delete',function(){
//
//    $post= Post::find(1);
//
//    $post->delete();
//
//});

//Route::get('/delete2',function(){
//
//    Post::destroy([15,16]);
//
//});


/*soft delete*/

Route::get('/softdelete',function(){

    Post::find(17)->delete();

});

//

//Route::get('/readsoftdelete', function(){
//
////    $post=Post::find(14);
////    return $post;
//
//    $post=Post::withTrashed()->where('is_admin' ,0)->get();
//
//    return $post;
//
////    $post=Post::onlyTrashed()->where('is_admin',0)->get();
////
////    return $post;
//
//});

/*restore*/

//Route::get('/restore',function(){
//
//    Post::withTrashed()->Where('is_admin',0)->restore();
//
//});

//Route::get('/forcedelete', function(){
//
//    Post::onlyTrashed()->Where('is_admin',0)->forceDelete();
//
//});

/*
 *
 * Eloquent Relationships
 *
 * */

/* one to one relationship*/
//
//Route::get('/user/{id}/post',function($id){
//
//
//    Return User::find($id)->post;
//
//});
//
//Route::get('/post/{id}/user',function($id){
//
//    return Post::find($id)->user->name;
//
//});


/* one to many relationship*/

//Route::get('/posts',function (){
//
//    $user= User::find(1);
//    foreach ($user->posts as $post){
//        echo $post->title. "<br>";
//    }
//
//
//});


/*Many to many relationship*/
//


/* Polymorphic relations*/

//Route::get('user/photos',function(){
//
//    $user=User::find(1);
//
//    foreach ( $user->photos as $photo){
//
//        return $photo;
//    }
//
//});

//Route::get('post/photos',function(){
//
//    $user=Post::find(1);
//
//    print_r($user);
//
//    foreach ( $user->photos as $photo){
//
//        echo $photo;
//    }
//
//});
//
//Route::get('photo/{id}/post' , function($id){
//
//    $photo=Photo::findorFail($id);
//
//    return $photo->imageable;
//
//});


/*Polymorphic Many to Many*/
//
//Route::get('/post/tag',function (){
//
//    $post =Post::find(1);
//    foreach ($post->tags as $tag){
//
//        echo $tag->name;
//    }
//
//});

Route::get('/tag/post',function (){

    $tag= Tag::find(2);

   return $tag->posts;

});

/*CRUD application*/

//Route::resource('posts','PostsController');

Route::resource('posts','PostsController');