<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Country;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('namesearch')) {
            $countries = Country::search($request->namesearch)
                ->paginate(6);
        } else {
            $countries = Country::paginate(6);
        }
        return view('CountrySearch', compact('countries'));
    }
}
