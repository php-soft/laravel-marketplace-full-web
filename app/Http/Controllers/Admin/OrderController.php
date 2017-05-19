<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index')->with('orders', $orders);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        if ($order->status == \App\Order::STATUS_NEW) {
            $status = "New";
        } else if ($order->status == \App\Order::STATUS_CONFIRM){
            $status = "Confirm";
        } else if ($order->status == \App\Order::STATUS_PAYMENT){
            $status = "Payment";
        } else if ($order->status == \App\Order::STATUS_SHIPPING){
            $status = "Shipping";
        } else if ($order->status == \App\Order::STATUS_RETURN){
            $status = "Return";
        } else if ($order->status == \App\Order::STATUS_DONE){
            $status = "Done";
        }
        return view('admin.orders.show')->with('order', $order)->with('status', $status);
    }
}
