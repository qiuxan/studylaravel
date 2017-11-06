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


    public function  destroy($id){

        $photo=Photo::findOrFail($id);

        $img_path=$photo->file;
//        return $img_path;
        $img_path= str_replace('codehacking/public/','',$img_path);
        unlink(public_path().$img_path);

        $photo->delete();


        return redirect('admin/media');

    }

    public function deleteMedia(Request $request){


        $photos=Photo::findOrFail($request->checkBoxArray);
        foreach ($photos as $photo){

            $photo->delete();

        }



        return redirect()->back();


//        return 'work';
    }
}
