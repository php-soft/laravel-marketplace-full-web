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
        return redirect('admin/cities');
    }
}
