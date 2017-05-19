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

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:types|max:255',
        ]);

        Type::create($request->all());
        return redirect()->route('adminTypes');
    }

    public function edit($id)
    {
        $types = Type::findOrFail($id);
        return view('admin.types.edit')->with('types', $types);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:countries,name,'.$id,
        ]);

        $types = Type::findOrFail($id);
        $types->update($request->all());
        return redirect()->route('adminTypes');
    }

    public function destroy($id)
    {
        Type::destroy($id);
        return redirect()->route('adminTypes');
    }
}
