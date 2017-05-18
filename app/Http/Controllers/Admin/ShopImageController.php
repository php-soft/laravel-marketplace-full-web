<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShopImage;

class ShopImageController extends Controller
{
    public function index()
    {
        $shopImages = ShopImage::all();
        return view('admin.shopImages.index')->with('shopImages', $shopImages);
    }
}
