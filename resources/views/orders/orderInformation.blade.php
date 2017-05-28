@extends('layouts.app')

@section('content')
<div class="container orderInformation-page">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <strong>Congratulations!</strong>
                You ordered successfully.
            </div>
            <h2>Order Information</h2>
            <div class="col-md-12">
                <h4>Your shopping cart</h4>
                <table class="table table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    @foreach ($order->orderProducts as $orderProduct)
                        <tr>
                            <td >{{ $orderProduct->product->name }}</td>
                            <td>{{ number_format($orderProduct->price) }}</td>
                            <td>{{ $orderProduct->quantity }}</td>
                            <td>{{ number_format($orderProduct->price*$orderProduct->quantity) }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <th colspan="3">Subtotal</th>
                            <th>{{ $subtotal }}</th>
                        </tr>
                </table>
                <div>
                    <h4>Information customer</h4>
                    <table class="table table-striped">
                        <tr>
                            <td>Order id</td>
                            <td>{{ $order->id }}</td>
                        </tr>
                        <tr>
                            <td>Customer</td>
                            <td>{{ $order->shipping_name }}</td>
                        </tr>
                        <tr>
                            <td>Phone<</td>
                            <td>{{ $order->shipping_phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $order->shipping_email }}</td>
                        </tr>
                        <tr>
                            <td>Shpping address</td>
                            <td>{{ $order->shipping_address }}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>{{ $order->country->name }}</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>{{ $order->city->name }}</td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td>{{ $order->district->name }}</td>
                        </tr>
                    </table>
                    <a href="{{ url('/') }}"><button class="btn btn-default">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
