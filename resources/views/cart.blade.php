@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    My shopping cart
                    <a href="{{ ''}}"><button class="btn btn-xs btn-primary pull-right">Buy continue</button></a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        @foreach ($carts as $cart)
                            <tr>
                                <td><img class="img-responsive img-thumbnail pull-left" src="{{ asset('upload/'.$cart->options['image']) }}" alt="noImage" style="width: 150px;height: 150px"></td>
                                <td>{{ $cart->name }}</td>
                                <td>{{ number_format($cart->price) }}</td>
                                <td>
                                    {{Form::open()}}
                                    {{ Form::text('qty', $cart->qty, ['size' =>3]) }}
                                </td>
                                <td>{{ number_format($cart->price*$cart->qty) }}</td>
                                <td>
                                    <a href="#"><button class="btn btn-xs btn-primary">Update quantity</button></a>
                                    {{ Form::close() }}
                                    <a href="" data-toggle="modal" data-target="{{"#".$cart->id}}"><button class="btn btn-xs btn-danger">Delete</button></a>
                                    <div id="{{$cart->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Warning!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you sure want to delete this product on my shopping cart?</p><br>
                                                    <h4>{{$cart->name}}</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{ '' }}"><button type="button" class="btn btn-danger">Yes</button></a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td colspan="3"><h4>Subtotal</h4></td>
                                <td><h4>{{ Cart::subtotal() }}</h4></td>
                                <td><a href=""><button class="btn btn-success">Order <span class="glyphicon glyphicon-shopping-cart"></span></button></a></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
