<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SeachController extends Controller
{
    public function index(Request $request)
    {
        $key = $request['key'];
        $products = Product::seach($key);
        return view('seachs.seach')
            ->with('products', $products);
    }
}
