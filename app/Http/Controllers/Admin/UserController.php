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
            'avatar' => 'required|unique:users|max:255',
            'first_name' => 'required|unique:users|max:255',
            'last_name' => 'required|unique:users|max:255',
            'phone_number' => 'required|unique:users|max:255',
            'date_of_birth' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|unique:users|max:255',
            'address' => 'required|unique:users|max:255',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        User::create($request->all());

        return redirect()->route('adminUsers');
    }
}
