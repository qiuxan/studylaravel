<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $request->session(['xian'=>'master instructor']);
//        return view('home');


//        $request->session()->put(['xian'=>'master instructor']);


//        session(['peter'=>'student']);

//        return session('peter');

//        $request->session()->forget('peter');
//
//        $request->session()->flush();
//        return $request->session()->all();


        /* how to use flash in session*/

//        $request->session()->flash('message','post ha been created');

//        return $request->session()->get('message');



        /*keep session longer*/

//        $request->session()->reflash();
//
//        $request->session()->keep('message');

    }
}
