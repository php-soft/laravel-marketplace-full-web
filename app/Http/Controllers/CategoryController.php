<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', '=', $id)->paginate(8);

        $has_page = $products->currentPage() - 1;
        $prev_current = 1;
        if ($has_page > 3) {
            $prev_current = $products->currentPage() - 3;
        }

        $remain_page = $products->lastPage() - $products->currentPage();
        $next_current = $products->lastPage();
        if ($remain_page > 3) {
            $next_current = $products->currentPage() + 3;
        }
        return view('categories.show')
            ->with('category', $category)
            ->with('products', $products)
            ->with('prev_current', $prev_current)
            ->with('next_current', $next_current);
    }
}
