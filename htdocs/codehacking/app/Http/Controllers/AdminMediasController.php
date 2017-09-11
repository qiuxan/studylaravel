<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminMediasController extends Controller
{
    //

    public function index(){


        $photos=Photo::all();

        return view('admin.media.index',compact('photos'));
    }


    public function create(){




        return view('admin.media.create',compact('photos'));
    }


    public function store(Request $request){

        $file=$request->file('file');

        $name=time().$file->getClientOriginalName();

        $file->move('images',$name);

        Photo::create(['file'=>$name]);


    }
}
