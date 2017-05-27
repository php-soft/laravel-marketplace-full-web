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
        return view('productsDetail')
            ->with('types', $types)
            ->with('product', $product);
    }

    public function showProductByCategory($id)
    {
        $types = Type::all();
        $category = Category::findOrFail($id);
        return view('products.show-by-category')
            ->with('category', $category)
            ->with('types', $types);
    }
}
