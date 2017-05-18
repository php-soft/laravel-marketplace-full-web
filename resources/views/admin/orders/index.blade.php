@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of orders
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order At</th>
                                <th>User</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->updated_at }}</td>
                                    <td>{{ $order->user->first_name }} {{ $order->user->last_name }}</td>
                                    <td>{{ $order->orderProducts->sum('quantity') }}</td>
                                    <td>{{ $order->orderProducts->sum('price') }}</td>
                                    <td class="text-right">
                                        <a href="#"><button class="btn btn-xs btn-primary">Show</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
