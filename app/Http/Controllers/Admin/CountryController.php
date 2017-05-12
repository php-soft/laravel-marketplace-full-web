<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Country;
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
        return view('countries.create')->with('countries', $countries);
}
