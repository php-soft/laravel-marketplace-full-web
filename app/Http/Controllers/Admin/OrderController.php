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
        $status = $order->status;
        $total_amount = 0;
        foreach ($order->orderProducts as $product) {
            $amount = $product->price*$product->quantity;
            $total_amount = $amount + $total_amount;
        }
        return view('admin.orders.show')
            ->with('order', $order)
            ->with('status', $status)
            ->with('total_amount', $total_amount);
    }

    public function edit(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('adminOrdersShow', ['id' => $id]);
    }
}
