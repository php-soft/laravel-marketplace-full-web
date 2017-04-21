<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Industrys;
use App\Categorys;
use App\Trademarks;
use App\Products;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addtocart($id){
    	$product=Products::find($id);
    	Cart::add($id,$product->name ,1 ,$product->price,['trademark'=>$product->trademark['name'] ]);
    	$cart_all=Cart::content();
        return view('cart')->with('cart_all',$cart_all) ;
    	
    }
    public function viewcart(){
    	$cart_all=Cart::content();
        return view('cart')->with('cart_all',$cart_all) ;
    }
    public function removecart($rowId){
    	Cart::remove($rowId);
    	return redirect('viewcart');
    }
    public function desc_cart($rowId){
    	$cart=Cart::get($rowId);
    	$qty=$cart->qty;
    	$qty--;
    	Cart::update($rowId,$qty);
    	return redirect('viewcart');
    }
     public function inc_cart($rowId){
    	$cart=Cart::get($rowId);
    	$qty=$cart->qty;
    	$qty++;
    	Cart::update($rowId,$qty);
    	return redirect('viewcart');
    }
}
