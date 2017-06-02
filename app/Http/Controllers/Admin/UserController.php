<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\City;
use App\Country;
use App\District;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        $cities = City::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        return view('admin.users.create')->with('cities', $cities)
            ->with('districts', $districts)
            ->with('countries', $countries);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'image',
            'first_name' => 'required|unique:users|max:255',
            'last_name' => 'required|unique:users|max:255',
            'phone_number' => 'required|unique:users|max:255',
            'date_of_birth' => 'required|unique:users|max:255',
            'address' => 'required|unique:users|max:255',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        $data = $request->all();
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        User::create($data);

        return redirect()->route('adminUsers');
    }

    public function edit($id)
    {
        $cities = City::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $user = User::findOrFail($id);
        return view('admin.users.edit')->with('user', $user)
            ->with('cities', $cities)
            ->with('districts', $districts)
            ->with('countries', $countries);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'avatar' => 'image',
            'first_name' => 'required|unique:users,first_name,'.$id,
            'last_name' => 'required|unique:users,last_name,'.$id,
            'phone_number' => 'required|unique:users,phone_number,'.$id,
            'date_of_birth' => 'required|unique:users,date_of_birth,'.$id,
            'address' => 'required|unique:users,address,'.$id,
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        $data = $request->all();
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        $user = User::findOrFail($id);
        $user->update($data);
        
        return redirect()->route('adminUsers');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('adminUsers');
    }
}
