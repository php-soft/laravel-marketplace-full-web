<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Type;
use App\Category;
use App\Product;
use App\Shop;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
