<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
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
        $allProducts = Product::all();
        return view('pages.index_products', compact('allProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.new_product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(($request->input('nomeProduto') != null) && ($request->input('descProduto') != null)){
            $product = new Product();
            $product->name = $request->input('nomeProduto');
            $product->description = $request->input('descProduto');
            $product->stars = $request->input('estrelas');
            $product->price = $request->input('preco');
            $product->quantity = $request->input('quantidade');
            $product->product_id = $request->input('selCategoria');
            if(isset($product->categoria_id)){
                $product->save();
            }
        }        
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if(isset($product)){
            return view('pages.edit_product', compact('product'));
        }  
        return redirect('/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if((isset($product)) && (isset($request))){
            $product->name = $request->input('nomeProduto');
            $product->description = $request->input('descProduto');
            $product->save();
        }  
        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if(isset($product)){
            $product->delete();
        }  
        return redirect('/produtos');
    }
}
