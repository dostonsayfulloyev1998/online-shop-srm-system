<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.admin');
    }

    function create(){
    view('admin.add_admin');
    }

    function store(Request $request){
        $admin = new Admin();

        if ($request->hasFile('image')){
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = $request->password;
            $admin->image = $request->file('image')->store('images');
        }else{
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = $request->password;
        }
        $admin->save();

        return redirect('/admin');
    }

    function edit($id){

    }

    function update(Request $request){

    }
    function destroy($id){
       Admin::destroy($id);

       return redirect('/admin');
    }
}
