<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type;
use App\Category;
use App\Product;
use App\Shop;
use Input;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index')->with('products', $products);
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $shops = Shop::pluck('name', 'id');
        return view('admin.products.create')
            ->with('categories', $categories)
            ->with('shops', $shops);
    }

    public function store()
    {
        Product::create(Input::all());
        return redirect()->route('adminProducts');
    }
}
