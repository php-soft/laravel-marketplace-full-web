<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;

class DistrictController extends Controller
{
    public function select(Request $request)
    {
        $districts = District::where('city_id', $request->id)->get();
        return $districts;
    }
}
