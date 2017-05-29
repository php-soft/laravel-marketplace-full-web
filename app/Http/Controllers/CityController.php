<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\District;

class CityController extends Controller
{
    public function select(Request $request)
    {
        $cities = City::where('country_id', $request->id)->get();
        $districts = District::where('city_id', $cities[0]['id'])->get();
        $cities['districts'] = $districts;
        return $cities;
    }
}
