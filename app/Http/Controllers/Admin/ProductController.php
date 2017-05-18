<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type;
use App\Category;
use App\Product;
use App\Shop;
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|exists:products,name|max:255',
            'image' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);
        Product::create($request->all());
        return redirect()->route('adminProducts');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('name', 'id');
        $shops = Shop::pluck('name', 'id');
        return view('admin/products/edit')
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('shops', $shops);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|exists:products,name|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('admin/products');
    }
}
