<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }


    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $product = new Product();

         if ($request->hasFile('image')){
             $product->name = $request->name;
             $product->price = $request->price;
             $product->c_id = $request->c_id;
             $product->image = $request->file('image')->store('images');
         }else{
             $product->name = $request->name;
             $product->price = $request->price;
             $product->c_id = $request->c_id;
         }
       $product->save();

       return  redirect('/product');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $product  = Product::where('id',$id)->get();

        $p =[];
        foreach ($product as $item){
            $p['id'] = $item->id;
            $p['name'] = $item->name;
            $p['price'] = $item->price;
            $p['image'] = $item->image;
            $p['c_id'] = $item->c_id;

        }
        return view('admin.edit_product',['product'=>$p]);
    }

    public function update(Request $request)
    {
       $id = $request->id;
       $product = Product::find($id);
       $product->name = $request->name;
       $product->price = $request->price;
       $product->c_id = $request->c_id;
       $product->image = $request->file('image')->store('images');
       $product->save();

        return  redirect('/product');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return  redirect('/product');
    }
}
