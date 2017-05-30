<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SeachController extends Controller
{
    public function seach(Request $request)
    {
        $key = $request->key;
        $data = [];
        foreach (Product::all() as $product) {
            if (strpos($product->name, $key) > 0) {
                $data[] = $product;
            }
        }
        return view('seach')
            ->with('data', $data);
    }
}
