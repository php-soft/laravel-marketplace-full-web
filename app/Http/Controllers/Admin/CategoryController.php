<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Type;
use Input;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index')->with('categories', $categories);
    }

    public function create()
    {
        $types = Type::pluck('name', 'id');
        return view('admin.categories.create')->with('types', $types);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'type_id' => 'required|numeric|exists:types,id'
        ]);
        Category::create(Input::all());
        return redirect()->route('adminCategories');
    }

    public function edit($id)
    {

        $category = Category::findOrFail($id);
        $types = Type::pluck('name', 'id');
        return view('admin.categories.edit')->with('category', $category)->with('types', $types);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255|min:3',
            'type_id' => 'required|numeric|exists:types,id'
        ]);
        $category = Category::findOrFail($id);
        $category->update(Input::all());
        return redirect()->route('adminCategories');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('adminCategories');
    }
}
