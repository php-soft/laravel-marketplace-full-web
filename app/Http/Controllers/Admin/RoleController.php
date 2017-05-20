<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index')->with('roles', $roles);
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.roles.edit')->with('role', $role);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name,'.$id,
            'description' => 'required'
        ]);

        $role = Role::findOrFail($id);
        $role->update($request->all());
        return redirect()->route('adminRoles');
    }
}
