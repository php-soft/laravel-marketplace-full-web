<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Country;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $countries = Country::search($request->input('search'))->toArray();
        }
        return view('CountrySearch',compact('countries'));
    }     
}
