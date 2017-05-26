<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $types = Type::all();
        $array = $request->all();
        $array['qty'] = $array['qty'] + 1;
        $array['options'] = ['image' => $request['image']];
        Cart::add($array);
        return redirect()->route('cartShow');
    }

    public function show()
    {
        $types = Type::all();
        $carts = Cart::content();
        return view('cart')
            ->with('types', $types)
            ->with('carts', $carts);
    }
}
