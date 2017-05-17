<?php

namespace App\Http\Controllers\Admin;

use App\City;
use Illuminate\Support\Facades\Input;
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
        return view('admin.cities.create');
    }
    public function store()
    {
        City::create(Input::all());
        return redirect('admin/cities');
    }
    public function update($id)
    {
        $city = City::findOrFail($id);
        return view('admin.cities.edit')->with('city', $city);
    }
    public function updateCity($id)
    {
        $city = City::findOrFail($id);
        $city->update(Input::all());
        return redirect()->route('adminCities');
    }
}
