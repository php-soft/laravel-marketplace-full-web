<?php

namespace App\Http\Controllers\Admin;

use App\District;
use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::all();
        return view('admin.districts.index')->with('districts', $districts);
    }

    public function create()
    {
        $cities = City::pluck('name', 'id');
        return view('admin.districts.create')->with('cities', $cities);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts|max:255',
        ]);

        District::create($request->all());

        return redirect()->route('adminDistricts');
    }
}
