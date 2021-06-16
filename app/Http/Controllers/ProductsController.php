<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=products::orderBy('cat_id', 'ASC')->paginate(5);

        return view('products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();

        return view('products.create',compact('categories'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name' =>'required|unique:products|max:120',
            'cat_id' =>'required',
            'price' =>'required',
        ]);

        $products= new products;
        $products->name=$request->name;
        $products->cat_id=$request->cat_id;
        $products->price=$request->price;
        $products->save();

        return redirect()->route('product')->with('proCreate','Product Create Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=category::all();

        $products= products::find($id);
        return view('products.edit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products=products::find($id);

        $validateData =$request->validate([
            'name'=>'required|unique:products,name,'.$products->id,
        ]);
        $products->name=$request->name;
        $products->cat_id=$request->cat_id;
        $products->price=$request->price;
        $products->save();

        return redirect()->route('product')->with('proUpdate','Product Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        products::findOrFail($id)->delete();

        return redirect()->route('product')->with('proDelete','Delete Successfully');
    }
}
