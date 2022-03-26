<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(){

        return view('admin.category');
    }

    function create(){
         return view('admin.add_category');
    }

    function store(Request $request){
            $category = new Category();

            if ($request->hasFile('image')){
                $category->name = $request->name;
                $category->image = $request->file("image")->store('images');
            }else{
                $category->name = $request->name;
            }
            $category->save();

            return redirect('/category');
    }

    function edit($id){
        $category  = Category::where('id',$id)->get();
        $c = [];
        foreach ($category as $item){
            $c['id'] = $item->id;
            $c['name'] = $item->name;
            $c['image'] = $item->image;
        }
        return view('admin.edit_category',['category'=>$c]);
    }

    function update(Request $request){

        $id = $request->id;
        $category = Category::find($id);
        if ($request->hasFile('image')){
            $category->name = $request->name;
            $category->image = $request->file('image')->store('images');
        }else{
            $category->name = $request->name;
        }
        $category->save();

        return redirect('/category');
    }
    function destroy($id){
        Category::destroy($id);

        return redirect('/category');
    }
}

