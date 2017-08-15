<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

//        $posts =   Post::all();

//        $posts =   Post::latest()->get();

//        $posts =   Post::orderBy('id','asc')->get();



        $posts =   Post::latest();


        return view('posts.index',compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        return "method that creats things";

        return  view('posts.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        $input=$request->all();

        if($file=$request->file('file')){

            $name=$file->getClientOriginalName();

            $file->move('images',$name);

            $input['path']=$name;


        };

        Post::create($input);


        /*deal with file information*/
//        $file=$request->file('file');
//
//        echo '<br>';
//
//        echo  $file->getClientOriginalName();
//
//        echo '<br>';
//
//        echo $file->getClientSize();



        //
        //return $request->all();

        /*validation*/


//        $this->validate($request,[
//
//
//             'title'=>'required'
//
//
//        ]);


        /* here */

//        Post::create($request->all());
//
//        return redirect('/posts');



//        $input=$request->all();
//        $input['title']=$request->title;
//        Post::create($request->all());


//        $post= new Post;
//        $post->title=$request->title;
//        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        //

        $post=Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //

        $post=Post::findOrFail($id);

        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

//        return $request->all();

        $post=Post::findOrFail($id);

        $post-> update($request->all());

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

//        $post=Post::findOrFail($id);
//
//        $post->delete();

        $post=Post::whereId($id)->delete();

        return redirect('posts');
    }

    public function contact(){

        $people=['Edwin','Jose', 'James', 'Peter', 'Maria'];
        return view('contact', compact('people'));

    }

    public function show_post($id,$name,$pw){

        //return view('post')->with('id',$id);

        return view('post', compact('id','name', 'pw'));
    }
}

