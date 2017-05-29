<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.productsDetail')
            ->with('product', $product);
    }
}
