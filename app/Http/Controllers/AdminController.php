<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Type;
use App\Category;
use App\Shop;
use App\Product;

class AdminController extends Controller
{
    public function admin(){

    	$type_pluck=Type::pluck('name','id');
    	$category_pluck=Category::pluck('name','id');
    	$shop_pluck=Shop::pluck('name','id');
    	$category_all=Category::all();
    	$shop_all=Shop::all();
    	$product_all=Product::all();
    	return view('admin')->with('type_pluck',$type_pluck)
    						->with('category_pluck',$category_pluck)
    						->with('shop_pluck',$shop_pluck)
    						->with('category_all',$category_all)
    						->with('shop_all',$shop_all)
    						->with('product_all',$product_all);
    }
    public function storeCategory(){

    	Category::insert(Input::all());
    	return redirect('admin');
    }
    public function storeShop(){

    	Shop::insert(Input::all());
    	return redirect('admin');
    }
    public function storeProduct(){

    	Product::insert(Input::all());

    	return redirect('admin');
    }
    public function viewupdateProduct($id){
    	$product=Product::find($id);
    	$category_pluck=Category::pluck('name','id');
    	$shop_pluck=Shop::pluck('name','id');
    	return view('viewupdateProduct')->with('category_pluck',$category_pluck)
    									->with('shop_pluck',$shop_pluck)
    									->with('product',$product);
    }
    public function updateProduct(){

    		$id=Input::get('id');
    		$name=Input::get('name');
			$file=Input::file('image');
			if(empty($file)){echo "<script>alert('No file image be choosed!');</script>";
			}
			else{
			 $destinationPath = 'images';
			 echo "<script>alert('Ok!');</script>";
		    Input::file('image')->move($destinationPath,$id.'.png');
		  		}

			$p=Product::find($id);
			$p->update(Input::all());
			return redirect('admin');
    }
}