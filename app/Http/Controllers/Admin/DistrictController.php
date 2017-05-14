<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\District;
use Illuminate\Support\Facades\Input;
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
        $districts = District::all();
        return view('admin.districts.create')->with('districts', $districts);
    }

    public function store()
    {
        District::create(Input::all());
        return redirect('admin/districts');
    }

    public function destroy($id)
    {
        District::destroy($id);
        return redirect('admin/districts');
    }

    public function update($id)
    {
        $district = District::find($id);
        return view('admin.districts.edit')->with('district', $district);
    }

    public function updateDistrict($id)
    {
        $district = District::find($id);
        $district->update(Input::all());
        return redirect('admin/districts');
    }
}
