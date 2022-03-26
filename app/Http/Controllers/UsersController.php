<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index(){
        return view('admin.users');
    }

    function create(){
      return view('admin.add_user');
    }

    function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/users');
    }

    function edit($id){
        $user  = User::where('id',$id)->get();

        $u=[];
        foreach ($user as $item){
            $u['id']=  $item->id;
            $u['name']=  $item->name;
            $u['email']=  $item->email;
            $u['password']=  $item->password;
        }

        return view('edit_user',['user'=>$u]);
    }

    function update(Request $request){
        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/users');
    }
    function destroy($id){

       User::destroy($id);
        return redirect('/users');
    }
}
