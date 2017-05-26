@extends('layouts.app')

@section('content')
<div class="container cart-page">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ ''}}"><button class="btn btn-xs btn-primary pull-right">Continue shopping</button></a>
            <h4>My shopping cart</h4>
            <table class="table table-striped cart-table">
                    <tr>
                        <th colspan="2">Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th class="text-right"></th>
                    </tr>
                @foreach ($carts as $cart)
                    <tr>
                        <td class='set-width-15'><img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$cart->options['image']) }}" alt="noImage"></td>
                        <td class='set-width-30'>{{ $cart->name }}</td>
                        <td>{{ number_format($cart->price) }}</td>
                        <td>
                            {{Form::open()}}
                                {{ Form::text('qty', $cart->qty, ['size' =>1]) }}
                                <a href="#"><span class="glyphicon glyphicon-refresh"></span></a>
                            {{ Form::close() }}
                        </td>
                        <td>{{ number_format($cart->price*$cart->qty) }}</td>
                        <td>
                            <a href="" data-toggle="modal" data-target="{{"#".$cart->id}}"><span class="glyphicon glyphicon-remove"></span></a>
                            <div id="{{$cart->id}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Warning!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Do you sure want to delete this product from your shopping cart?</p><br>
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
@endsection
