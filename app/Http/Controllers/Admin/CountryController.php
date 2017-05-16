<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Country;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index')->with('countries', $countries);
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store()
    {
        Country::create(Input::all());
        return redirect()->route('adminCountries');
    }

    public function update($id)
    {
        $country = Country::findOrFail($id);
        return view('admin.countries.edit')->with('country', $country);
    }

    public function updateCountry($id)
    {
        $country = Country::findOrFail($id);
        $country->update(Input::all());
        return redirect()->route('adminCountries');
    }
}
