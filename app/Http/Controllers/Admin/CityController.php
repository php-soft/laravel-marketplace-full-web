<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index')->with('cities', $cities);
    }

    public function create()
    {
        $countries = Country::pluck('name', 'id');
        return view('admin.cities.create')->with('countries', $countries);
    }

    public function store()
    {
        City::create(Input::all());
        return redirect()->route('adminCities');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        $countries = Country::pluck('name', 'id');
        return view('admin.cities.edit')->with('city', $city)->with('countries', $countries);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:cities,name,'.$id,
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        $city = City::findOrFail($id);
        $city->update($request->all());
        return redirect()->route('adminCities');
    }
}
