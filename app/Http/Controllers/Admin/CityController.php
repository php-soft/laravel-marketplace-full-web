<?php

namespace App\Http\Controllers\Admin;

use App\City;
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
}
