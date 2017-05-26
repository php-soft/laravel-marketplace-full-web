<?php

namespace App\Http\Controllers;

use App\Type;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $types = Type::all();
        return view('productsDetail')
            ->with('types', $types)
            ->with('product', $product);
    }
}
