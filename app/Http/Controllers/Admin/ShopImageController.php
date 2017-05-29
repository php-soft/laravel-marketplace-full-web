<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopImage;
use Carbon\Carbon;
use App\Shop;

class ShopImageController extends Controller
{
    public function index()
    {
        $shopImages = ShopImage::all();
        return view('admin.shopImages.index')->with('shopImages', $shopImages);
    }

    public function create()
    {
        $shops = Shop::pluck('name', 'id');
        return view('admin.shopImages.create')->with('shops', $shops);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'shop_id' => 'required|numeric|exists:shops,id',
            'photo' => 'image'
        ]);
        $data = $request->all();
        $file = $request->file('photo');
        $shopName = Shop::findOrFail($data['shop_id'])->name;
        if (!empty($file)) {
            $data['image'] = str_slug(Carbon::now().'_'.$shopName.'.'.$file->getClientOriginalExtension());
            $file->move('upload', $data['image']);
        } else {
            $data['image'] = 'default.jpg';
        }
        ShopImage::create($data);
        return redirect()->route('adminShopImages');
    }
}
