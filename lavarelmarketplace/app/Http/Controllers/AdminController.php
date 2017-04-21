<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Industrys;
use App\Categorys;
use App\Trademarks;
use App\Products;
use App\Shop;


class AdminController extends Controller
{
    public function admin(){

    	$industry_pluck=Industrys::pluck('name','id');
    	$category_pluck=Categorys::pluck('name','id');
    	$trademark_pluck=Trademarks::pluck('name','id');
        $shop_pluck=Shop::pluck('name','id');
    	$category_all=Categorys::all();
    	$trademark_all=Trademarks::all();
    	$product_all=Products::all();
    	return view('admin')->with('industry_pluck',$industry_pluck)
    						->with('category_pluck',$category_pluck)
    						->with('trademark_pluck',$trademark_pluck)
                            ->with('shop_pluck',$shop_pluck)
    						->with('category_all',$category_all)
    						->with('trademark_all',$trademark_all)
    						->with('product_all',$product_all);
    }
    public function storeCategory(){

    	Categorys::insert(Input::all());
    	return redirect('admin');
    }
    public function storeTrademark(){

    	Trademarks::insert(Input::all());
    	return redirect('admin');
    }
    public function storeProduct(){

    	Products::insert(Input::all());

    	return redirect('admin');
    }
    public function viewupdateProduct($id){
    	$product=Products::find($id);
    	$category_pluck=Categorys::pluck('name','id');
    	$trademark_pluck=Trademarks::pluck('name','id');
    	return view('viewupdateProduct')->with('category_pluck',$category_pluck)
    									->with('trademark_pluck',$trademark_pluck)
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

			$p=Products::find($id);
			$p->update(Input::all());
			return redirect('admin');
    }
}