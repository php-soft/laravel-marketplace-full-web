<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Country;

class SearchController extends Controller
{
    public function indexCountry(Request $request)
    {
        if ($request->has('search')) {
            $countries = Country::search($request->search)
                ->paginate(6);
        } else {
            $countries = Country::paginate(6);
        }
        return view('CountrySearch', compact('countries'));
    }
}
