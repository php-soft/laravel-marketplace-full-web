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
            'city_id' => 'required|numeric|exists:cities,id',
        ]);

        District::create($request->all());

        return redirect()->route('adminDistricts');
    }

    public function edit($id)
    {
        $cities = City::pluck('name', 'id');
        $district = District::findOrFail($id);
        return view('admin.districts.edit')->with('district', $district)
                ->with('cities', $cities);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:districts,name,'.$id,
            'city_id' => 'required|numeric|exists:cities,id',
        ]);

        $district = District::findOrFail($id);
        $district->update($request->all());
        return redirect()->route('adminDistricts');
    }

    public function destroy($id)
    {
        District::destroy($id);
        return redirect()->route('adminDistricts');
    }
}
