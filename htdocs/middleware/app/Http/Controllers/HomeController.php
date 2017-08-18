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

        $request->session()->forget('peter');

        $request->session()->flush();
        return $request->session()->all();
    }
}
