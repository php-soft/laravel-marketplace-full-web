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
        $countries = Country::all();
        return view('admin.countries.create')->with('countries', $countries);
    }

    public function store()
    {
        Country::create(Input::all());
        return redirect('admin/countries/');
    }
}
