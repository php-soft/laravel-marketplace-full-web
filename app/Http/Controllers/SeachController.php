<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SeachController extends Controller
{
    public function seach(Request $request)
    {
        $key = $request['key'];
        $products = [];
        foreach (Product::all() as $product) {
            if (strpos($product->name, $key) > 0) {
                $products[] = $product;
            }
        }
        return view('seachs.seach')
            ->with('products', $products);
    }
}
