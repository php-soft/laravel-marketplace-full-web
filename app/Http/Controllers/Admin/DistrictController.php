<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('admin.districts.index')->with('districts', $districts);
    }
}
