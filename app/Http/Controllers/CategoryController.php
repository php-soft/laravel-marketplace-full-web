<?php

namespace App\Http\Controllers;

use App\Category;
use App\Type;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $types = Type::all();
        $category = Category::findOrFail($id);
        return view('categories.show')
            ->with('category', $category)
            ->with('types', $types);
    }
}
