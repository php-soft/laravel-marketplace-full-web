<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shop;
use App\User;
use App\Type;
use App\City;
use App\Country;
use App\District;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shops.index')->with('shops', $shops);
    }

    public function create()
    {
        $types = Type::pluck('name', 'id');
        $users = User::pluck('email', 'id');
        $cities = City::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        return view('admin.shops.create')
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
            'user_id' => 'required|numeric|exists:users,id',
            'type_id' => 'required|numeric|exists:types,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
            'description' => 'required',
            'status' => 'required|numeric',
            'photo' => 'image'
        ]);
        $data = $request->all();
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

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        $types = Type::pluck('name', 'id');
        $users = User::pluck('email', 'id');
        $cities = City::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');
        $districts = District::pluck('name', 'id');
        $status = Shop::getStatuses();
        return view('admin.shops.edit')
            ->with('status', $status)
            ->with('shop', $shop)
            ->with('cities', $cities)
            ->with('countries', $countries)
            ->with('districts', $districts)
            ->with('users', $users)
            ->with('types', $types);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'user_id' => 'required|numeric|exists:users,id',
            'type_id' => 'required|numeric|exists:types,id',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
            'description' => 'required',
            'photo' => 'image'
        ]);
        $data = $request->all();
        $file = $request->file('photo');
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$data['name'].'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        }
        $shop = Shop::findOrFail($id);
        $shop->update($data);
        return redirect('adminShops');
    }

    public function destroy($id)
    {
        Shop::destroy($id);
        return redirect('adminShops');
    }
}
