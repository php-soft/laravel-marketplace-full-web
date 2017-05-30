<?php

namespace App\Http\Controllers;

use App\User;
use App\Type;
use App\City;
use App\Country;
use App\District;
use Carbon\Carbon;
use App\Shop;
use Auth;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function create()
    {
        $types = Type::pluck('name', 'id');
        $users = User::select('email')
            ->where('id', Auth::user()->id)->first();
        $cities = City::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        return view('registerShops')
            ->with('cities', $cities)
            ->with('countries', $countries)
            ->with('districts', $districts)
            ->with('users', $users)
            ->with('types', $types);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'type_id' => 'required|numeric|exists:types,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
            'description' => 'required',
            'photo' => 'image'
            ]);
        $data = $request->all();
        $data['status'] = 0;
        $data['user_id'] = Auth::user()->id;
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        Shop::create($data);
        return redirect()->route('adminShops');
    }
}
