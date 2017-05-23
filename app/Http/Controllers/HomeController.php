<?php

namespace App\Http\Controllers;

use App\Category;
use App\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $types = Type::all();
        return view('home')
            ->with('categories', $categories)
            ->with('types', $types);
    }
}
