<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::get();
        return view('product.index',['products'=>$products]);
    }
    
    public function cart()
    {
        return view('product.cart');
    }

    public function list()
    {
        $products=Product::get();
        return view('product.list',['products'=>$products]);
    }

   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated=$request->validate([
        //     'name'=>'required|min:6',
        //     'price'=>'required',
        //     // 'image'=>'required',
        //     'categry_id'=>'required',
        // ]);
        // dd($request->all());
        product::create($request->all());
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $product=Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id,Request $request)
    {
        $product=product::find($id);
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $id)
    {
        $product=Product::find($id);
       return view('product.update',
       compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('product.index');
    }
}
