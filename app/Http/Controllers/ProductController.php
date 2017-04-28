<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Type;
use App\Category;
use App\Shop;


class ProductController extends Controller
{
    public function home()
    {
    	$type_all=Type::all();
    	$product_all=Product::all();
    	$category_all=Category::all();
        $shop_all=Shop::all();
    	
        return view('master') ->with('product_all',$product_all)
        					  ->with('type_all',$type_all)
                              ->with('shop_all',$shop_all)
        					  ->with('category_all',$category_all);
    }
}
