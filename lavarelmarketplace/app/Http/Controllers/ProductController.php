<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Industrys;
use App\Categorys;
use App\Trademarks;
use App\Shop;

class ProductController extends Controller
{
    public function home()
    {
        $shop_all=Shop::all();
    	$industry_all=Industrys::all();
    	$product_all=Products::all();
    	$category_all=Categorys::all();
    	$trademark_all=Trademarks::all();
        return view('master') ->with('product_all',$product_all)
        					  ->with('industry_all',$industry_all)
        					  ->with('category_all',$category_all)
        					  ->with('trademark_all',$trademark_all)
                              ->with('shop_all',$shop_all);
    }
    public function showbycategory($id){
        $shop_all=Shop::all();
        $industry_all=Industrys::all();
        $category_all=Categorys::all();
        $trademark_all=Trademarks::all();
        
        $category_name=Categorys::find($id)->name;
        $product_all=Products::where('category_id',$id)->get();
        
        return view('master')->with('product_all',$product_all)
                              ->with('industry_all',$industry_all)
                              ->with('category_all',$category_all)
                              ->with('trademark_all',$trademark_all)
                              ->with('shop_all',$shop_all)
                              ->with('category_name',$category_name);

    }
    public function showbytrademark($id){
        $shop_all=Shop::all();
        $industry_all=Industrys::all();
        $category_all=Categorys::all();
        $trademark_all=Trademarks::all();
        
       
        $trademark_name=Trademarks::find($id)->name;
        $product_all=Products::where('trademark_id',$id)->get();
        return view('master')->with('product_all',$product_all)
                              ->with('industry_all',$industry_all)
                              ->with('category_all',$category_all)
                              ->with('trademark_all',$trademark_all)
                              ->with('shop_all',$shop_all)
                              ->with('trademark_name',$trademark_name);

    }
    public function showbyshop($id){
        $shop_all=Shop::all();
        $industry_all=Industrys::all();
        $category_all=Categorys::all();
        $trademark_all=Trademarks::all();
        
        $shop_name=Shop::find($id)->name;
        $product_all=Products::where('shop_id',$id)->get();
        return view('master')->with('product_all',$product_all)
                              ->with('industry_all',$industry_all)
                              ->with('category_all',$category_all)
                              ->with('trademark_all',$trademark_all)
                              ->with('shop_all',$shop_all)
                              ->with('shop_name',$shop_name);

    }
    public function showoneproduct($id){
        $shop_all=Shop::all();
        $industry_all=Industrys::all();
        $category_all=Categorys::all();
        $trademark_all=Trademarks::all();
        
       
        $product=Products::find($id);
        return view('showoneproduct')->with('product',$product)
                              ->with('industry_all',$industry_all)
                              ->with('category_all',$category_all)
                              ->with('trademark_all',$trademark_all)
                              ->with('shop_all',$shop_all);

    }
}
