<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Type;
use Input;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        $types = Type::pluck('name', 'id');
        return view('admin.categories.create')->with('types', $types);
    }

    public function edit()
    {
        $types = Type::pluck('name', 'id');
        return view('admin.categories.create')->with('types', $types);
    }

    public function store()
    {
        $categories=Category::create(Input::all());
        $categories = Category::all();
        return view('admin.categories.index')->with('categories', $categories);
    }
}
