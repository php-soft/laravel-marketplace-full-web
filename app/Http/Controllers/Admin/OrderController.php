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
        } elseif ($order->status == \App\Order::STATUS_CONFIRM) {
            $status = "Confirm";
        } elseif ($order->status == \App\Order::STATUS_PAYMENT) {
            $status = "Payment";
        } elseif ($order->status == \App\Order::STATUS_SHIPPING) {
            $status = "Shipping";
        } elseif ($order->status == \App\Order::STATUS_RETURN) {
            $status = "Return";
        } elseif ($order->status == \App\Order::STATUS_DONE) {
            $status = "Done";
        }
        return view('admin.orders.show')->with('order', $order)->with('status', $status);
    }
}
