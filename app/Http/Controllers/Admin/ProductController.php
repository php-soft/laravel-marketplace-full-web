<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type;
use App\Category;
use App\Product;
use App\Shop;
use Carbon\Carbon;
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
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric|exists:categories,id',
            'shop_id' => 'required|numeric|exists:shops,id',
            'photo' => 'image'
        ]);
        $data = $request->all();
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        Product::create($data);
        return redirect()->route('adminProducts');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::pluck('name', 'id');
        $shops = Shop::pluck('name', 'id');
        return view('admin.products.edit')
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('shops', $shops);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric|exists:categories,id',
            'shop_id' => 'required|numeric|exists:shops,id',
            'photo' => 'image'
        ]);
        $data = $request->all();
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        }
        $product = Product::findOrFail($id);
        $product->update($data);
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('admin/products');
    }
}
