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
                    <div class="panel-body">
                        <div class="col-md-4">
                            <h4>User Informations</h4>
                            @if (!empty($order->user->email))
                                <p>Name: {{ $order->user->last_name }} {{ $order->user->first_name }}</p>
                                <p>Email: {{ $order->user->email }}</p>
                                <p>Address: {{ $order->user->address }}</p>
                                <p>Phone: {{ $order->user->phone_number }}</p>
                            @else
                                <p>Name: None</p>
                                <p>Email: None</p>
                                <p>Address: None</p>
                                <p>Phone: None</p>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <h4>Order Informations</h4>
                            <p>Order at: {{ $order->created_at }}</p>
                            <p>Status: {{ $order->statusText() }}</p>
                        </div>

                        <div class="col-md-4">
                            <h4>Shipping Informations</h4>
                            <p>Name: {{ $order->shipping_name }}</p>
                            <p>Address: {{ $order->shipping_address }} - {{ $order->district->name }} - {{ $order->city->name }} - {{ $order->country->name }}</p>
                            <p>Phone: {{ $order->shipping_phone }}</p>
                            <p>Email: {{ $order->shipping_email }}</p>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h4>Product Informations</h4>
                        <div class="col-md-12">
                            <div class="col-md-1"> {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 0) }}
                                {{ Form::submit('NEW',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-1">
                                {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 1) }}
                                {{ Form::submit('CONFIRM',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-1">
                                {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 2) }}
                                {{ Form::submit('PAYMENT',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-1">
                                {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 3) }}
                                {{ Form::submit('SHIPPING',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-1">
                                {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 4) }}
                                {{ Form::submit('RETURN',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                            <div class="col-md-1">
                                {{Form::open(['route'=>['orderAdminEdit', $order->id], 'method' => 'put'])}}
                                {{ Form::hidden('status', 5) }}
                                {{ Form::submit('DONE',['class'=>'btn btn-primary']) }}
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h4>Product Informations</h4>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                        <th>Shop</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($order->orderProducts as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->product->name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->price*$product->quantity }}</td>
                                        <td>{{ $product->product->shop->name }}</td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td>{{ $order->orderProducts->sum('quantity') }}</td>
                                        <td></td>
                                        <td>{{ $total_amount }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
