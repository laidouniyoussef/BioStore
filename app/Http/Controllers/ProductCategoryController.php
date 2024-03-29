<?php

namespace App\Http\Controllers;

use App\Models\models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $productcategory = ProductCategory::all();
        return view('website.backend.productcategory.index',compact('productcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.backend.productcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->category_name,'-');
        ProductCategory::create(
            [
                'category_name' =>$request->category_name ,
                'slug' => $slug
            ]
        );
        return redirect()->route('productcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productcategory)
    {
        return view('website.backend.productcategory.update',compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productcategory)
    {
        $slug = Str::slug($request->category_name,'-');
        $productcategory->update(
            [
                'category_name' =>$request->category_name ,
                'slug' => $slug
            ]
        );
        return redirect()->route('productcategory.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productcategory)
    {
        $productcategory->delete();
        return redirect()->route('productcategory.index');
    }
}
