<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users=User::all();

//        return view('admin.users.index');


        return view('admin.users.index',compact('users'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $roles=Role::pluck('name','id')->all();

        return view('admin.users.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Usersrequest $request)
    {
        //

        if(trim($request->password)==''){


            $input=$request->except('password');

        }

        else{

            $input = $request->all();

            $input['password']=bcrypt($request->password);

        }


        if($file=$request->file('photo_id')){


            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }

        User::create($input);

//        User::create($request->all());

        return redirect('/admin/users');

       // return $request->all();


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

        return view('admin.users.show');

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

        $roles=Role::pluck('name','id')->all();

        $user= User::findOrFail($id);
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        //

        if(trim($request->password)==''){


            $input=$request->except('password');

        }

        else{

            $input = $request->all();

            $input['password']=bcrypt($request->password);

        }



        $user=User::findOrFail($id);



        if($file=$request->file('photo_id')){

            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo=Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;


        }



        $user->update($input);

//        return $input;


        return redirect('/admin/users');



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
//        User::findOrFail($id)->delete();

       $user= User::findOrFail($id);

       $img_path=$user->photo->file;

        $img_path= str_replace('codehacking/public/','',$img_path);


//        return public_path().$img_path;


//       return public_path();

        unlink(public_path().$img_path);



        $user->delete();

        Session::flash('deleted_user','The user has been deleted');


        return redirect('/admin/users');
    }
}
