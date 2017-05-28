<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        $data['options'] = ['image' => $request['image']];
        Cart::add($data);
        return redirect()->route('cartShow');
    }

    public function show()
    {
        $carts = Cart::content();
        return view('carts.cart')
            ->with('carts', $carts);
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cartShow');
    }
}
