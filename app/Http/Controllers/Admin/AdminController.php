<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Type;
use App\Category;
use App\Product;
use App\Shop;

class AdminController extends Controller
{
    public function admin()
    {
        $type_pluck = Type::pluck('name','id');
        $category_pluck = Category::pluck('name','id');
        $shop_pluck = Shop::pluck('name','id');
        $category_all = Category::all();
        $product_all = Product::all();
        $type_all = Type::all();
        return view('admin')->with('type_pluck',$type_pluck)
                            ->with('category_pluck',$category_pluck)
                            ->with('shop_pluck',$shop_pluck)
                            ->with('type_all',$type_all)
                            ->with('category_all',$category_all)
                            ->with('product_all',$product_all);
    }

    public function storeCategory()
    {
        Category::create(Input::all());
        return redirect('admin');
    }

    public function storeProduct()
    {
        Product::create(Input::all());
        return redirect('admin');
    }
}
