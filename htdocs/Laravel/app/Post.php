<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    //

//    protected $table='posts';
//
//    protected  $primaryKey='id';
    use SoftDeletes;
    protected  $dates=[''];
    protected  $fillable=[

    'title',
    'content'

];

    public function user(){

        return $this->belongsTo('App\User');

    }

    public  function photos(){

        return $this->morphMany('App\Photo', 'imageable');


    }

    public  function tags(){

        return $this->morphToMany('App\Tag', 'taggable');

    }
}
