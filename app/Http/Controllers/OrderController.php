<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Address;
use App\Country;
use Cart;
use Auth;
use App\OrderProduct;
use App\Order;

class OrderController extends Controller
{
    public function show()
    {
        if (Cart::count() == 0) {
            $error = "Cart is empty! Please add products.";
            return redirect()->route('cartError', ['error' => $error]);
        }
        $carts = Cart::content();
        $countries = Country::pluck('name', 'id');
        return view('orders.order')
            ->with('carts', $carts)
            ->with('countries', $countries);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'shipping_name' => 'required|max:100',
            'shipping_address' => 'required|max:255',
            'shipping_email' => 'required|email|max:255',
            'shipping_phone' => 'required|max:20',
            'city_id' => 'required|numeric|exists:cities,id',
            'district_id' => 'required|numeric|exists:districts,id',
            'country_id' => 'required|numeric|exists:countries,id',
        ]);

        if (Cart::count() == 0) {
            $error = "Cart is empty! Please add products.";
            return redirect()->route('cartError', ['error' => $error]);
        }
        $order_id = mt_rand();
        $data = $request->all();
        $data['id'] = $order_id;
        unset($data['_token']);
        if (!Auth::guest()) {
            $data['user_id'] = Auth::user()->id;
        }
        Order::insert($data);
        OrderProduct::store($order_id);
        Cart::destroy();
        return redirect()->route('orderInformation', [
            'order_id' => $order_id]);
    }

    public function orderInformation($order_id)
    {
        $order = Order::findOrFail($order_id);
        $subtotal = $order->subtotal();
        return view('orders.orderInformation')
                ->with('order', $order)
                ->with('subtotal', $subtotal);
    }
}
