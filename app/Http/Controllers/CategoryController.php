<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Utils;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allCategories = Category::all();
        return view('pages.index_categories', compact('allCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.new_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(($request->input('nomeCategoria') != null) && ($request->input('descCategoria') != null)){
            $category = new Category();
            $category->name = $request->input('nomeCategoria');
            $category->description = $request->input('descCategoria');
            $category->save();
        }
        //Boco, nunca retorne a view, pois sem passar por controller vc não tem as variáveis!!!
       //return view('pages.index_categories');
        return redirect('/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if(isset($category)){
            return view('pages.edit_category', compact('category'));
        }  
        return redirect('/categorias');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if((isset($category)) && (isset($request))){
            $category->name = $request->input('nomeCategoria');
            $category->description = $request->input('descCategoria');
            $category->save();
        }  
        return redirect('/categorias');
    }

    
    //public function destroy(Category $category){}
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if(isset($category)){
            $category->delete();
        }  
        return redirect('/categorias');      
    }
}
