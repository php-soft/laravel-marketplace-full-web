<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $types = Type::all();
        return view('products.productsDetail')
            ->with('types', $types)
            ->with('product', $product);
    }
}
