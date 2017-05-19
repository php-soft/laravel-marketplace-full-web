@extends('layouts.admin')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Order Informations
                    <div class="pull-right"><a href="{{ route('adminOrders') }}"><button class="btn btn-xs btn-primary">Back to Order index page</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <h4>Shipping Informations</h4>
                    <p>
                    @foreach($order->orderProducts as $product)
                        Product: {{ $product->product->name }} - Quantity: {{ $product->quantity }} - Price: {{ $product->price }} 
                    @endforeach
                    </p>
                    <p>Last Order at: {{ $order->updated_at }}</p>
                    <p>Status: {{ $status }}</p>
                    <p>Name: {{ $order->shipping_name }}</p>
                    <p>Address: {{ $order->shipping_address }} - {{ $order->district->name }} - {{ $order->city->name }} - {{ $order->country->name }}</p>
                    <p>Phone: {{ $order->shipping_phone }}</p>
                    <p>Email: {{ $order->shipping_email }}</p>
                </div>
                <div class="panel-body">
                    <h4>User Informations</h4>
                    <p>Name: {{ $order->user->first_name }} {{ $order->user->last_name }}</p>
                    <p>Address: {{ $order->user->address }} - {{ $order->user->district->name }} - {{ $order->user->city->name }} - {{ $order->user->country->name }}</p>
                    <p>Phone: {{ $order->user->phone_number }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
