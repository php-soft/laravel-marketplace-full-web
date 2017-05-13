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

    public function country_create()
    {
        $countries = Country::all();
        return view('admin.countries.create')->with('countries', $countries);
    }

    public function country_store()
    {
        Country::create(Input::all());
        return redirect('admin/countries/');
    }
}
