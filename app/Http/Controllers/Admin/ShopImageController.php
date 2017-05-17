<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopImageController extends Controller
{
    public function index()
    {
        $shopimages = ShopImage::all();
        return view('admin.shopimages.index')->with('shopimages', $shopimages);
    }
}
