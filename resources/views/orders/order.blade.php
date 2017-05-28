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
            <h2>Order</h2>
            <div class="col-md-12">
                <h4>Your shopping cart</h4>
                <table class="table table-striped cart-table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    @foreach ($carts as $cart)
                        <tr>
                            <td >{{ $cart->name }}</td>
                            <td>{{ number_format($cart->price) }}</td>
                            <td>{{ $cart->qty }}</td>
                            <td>{{ number_format($cart->price*$cart->qty) }}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <th colspan="3">Subtotal</th>
                            <th>{{ Cart::subtotal() }}</th>
                        </tr>
                </table>
                <div>
                    <h4>Information</h4>
                    {{Form::open(['route'=>'orderStore'])}}
                        <div class="form-group">
                            {!! Form::label('shipping_name', 'Customer name') !!}
                            <div class="form-controls">
                                {{ Form::text('shipping_name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shipping_address', 'Shipping address') !!}
                            <div class="form-controls">
                                {{ Form::text('shipping_address', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shipping_phone', 'Shipping phone') !!}
                            <div class="form-controls">
                                {{ Form::text('shipping_phone', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shipping_email', 'Shipping email') !!}
                            <div class="form-controls">
                                {{ Form::text('shipping_email', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('country_id', 'Country') !!}
                            <div class="form-controls">
                                {{ Form::select('country_id', $countries, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('city_id', 'City') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', $cities, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('district_id', 'District') !!}
                            <div class="form-controls">
                                {{ Form::select('district_id', $districts, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('status', 0) }}
                        {!! Form::submit('Order', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('cartShow') }}">Back to cart</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
