<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Type;
use Input;

class CategoryController extends Controller
{
    public function indexxx()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

        public function create()
    {
        $types = Type::pluck('name', 'id');
        return view('admin.categories.create')->with('types', $types);
    }
}
