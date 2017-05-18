<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index')->with('types', $types);
    }

    public function create()
    {
        return view('admin.types.create');
    }

    public function store()
    {
        Country::create(Input::all());
        return redirect()->route('adminTypes');
    }
}
