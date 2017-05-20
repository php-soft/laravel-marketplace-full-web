<?php

namespace App\Http\Controllers\Admin;

use App\Address;
use App\City;
use App\Country;
use App\District;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('admin.addresses.index')->with('addresses', $addresses);
    }

    public function create()
    {
        $users = User::pluck('name', 'id');
        $cities = City::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        return view('admin.addresses.create')->with('cities', $cities)
                ->with('districts', $districts)
                ->with('countries', $countries)
                ->with('users', $users);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'street' => 'required|unique:addresses|max:255',
            'zip_code' => 'required|unique:addresses|max:255',
            'phone_number' => 'required|unique:addresses|max:255',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        District::create($request->all());

        return redirect()->route('adminAddresses');
    }
}
