<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\City;
use App\Country;
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
        $cities = City::all();
        return view('admin.cities.create')->with('cities', $cities);
        
    }
    
}
