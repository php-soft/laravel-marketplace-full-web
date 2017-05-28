@extends('layouts.app')

@section('content')
<div class="container cart-page">
    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                            {{ Form::open(['route'=>[ 'cartUpdate', $cart->rowId ]]) }}
                                {{ Form::text('qty', $cart->qty, ['size' =>1]) }}
                                <button><span class="glyphicon glyphicon-refresh"></span></button>
                            {{ Form::close() }}
                        </td>
                        <td>{{ number_format($cart->price*$cart->qty) }}</td>
                        <td class="set-width-5">
                            <a href="" data-toggle="modal" data-target="{{"#".$cart->id}}"><span class="glyphicon glyphicon-remove pull-right"></span></a>
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
                                            <a href="#"><button type="button" class="btn btn-danger">Yes</button></a>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 ">
                    <h3 class="border-bottom">Subtotal:
                    <span class="pull-right">{{ Cart::subtotal() }}</span></h3>
                    <div class="padding-top pull-right">
                        <a href=""><button class="btn btn-success">Order <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                        or <a href="{{ url('/') }}"><button class="btn btn-default">Continue shopping</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
