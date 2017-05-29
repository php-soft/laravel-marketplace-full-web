<?php

namespace App\Http\Controllers;

use App\User;
use App\Type;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $types = Type::all();
        return view('users.usersDetail')->with('user', $user)->with('types', $types);
    }
}
