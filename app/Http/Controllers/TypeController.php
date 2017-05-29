<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function show($id)
    {
        $type = Type::findOrFail($id);
        return view('types.show')
            ->with('type', $type);
    }
}
