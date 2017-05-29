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
                                {{ Form::select('country_id', $countries, '10', ['class'=>'form-control', 'id' => 'country_select']) }}
                            </div>
                        </div>
                        <script>
                            window.onload = function(){
                                var _token = $('input[name="_token"]').val();
                                $('#city_select').empty();
                                var id = $('#country_select').val();
                                $.ajax({
                                    type: 'get',
                                    url: "/ajaxCity",
                                    data: {'id' : id ,
                                            '_token' : _token},
                                    success: function(data){
                                        var districts = data['districts'];
                                        delete data['districts'];
                                        $.each(data, function(i,n) {
                                            $('#city_select').append("<option value="+n.id+">"+n.name+"</option>");
                                        });
                                        $.each(districts, function(i,n) {
                                            $('#district_select').append("<option value="+n.id+">"+n.name+"</option>");
                                        });
                                    },
                                    error: function(data){
                                        alert("fail" + ' ' +data)
                                    },

                                });
                            }
                        </script>
                        <div class="form-group">
                            {!! Form::label('city_id', 'City') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', [], null, ['class'=>'form-control', 'id' => 'city_select']) }}
                            </div>
                        </div>
                        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                var _token = $('input[name="_token"]').val();
                                $('#country_select').change(function() {
                                    $('#city_select').empty();
                                    $('#district_select').empty();
                                    var id = $(this).val();
                                    $.ajax({
                                        type: 'get',
                                        url: "/ajaxCity",
                                        data: {'id' : id ,
                                                '_token' : _token},
                                        success: function(data){
                                            var districts = data['districts'];
                                            delete data['districts'];
                                            $.each(data, function(i,n) {
                                                $('#city_select').append("<option value="+n.id+">"+n.name+"</option>");
                                            });
                                            $.each(districts, function(i,n) {
                                                $('#district_select').append("<option value="+n.id+">"+n.name+"</option>");
                                            });
                                        },
                                        error: function(data){
                                            alert("fail" + ' ' +data)
                                        },

                                    });
                                });
                            });
                        </script>
                        <div class="form-group">
                            {!! Form::label('district_id', 'District') !!}
                            <div class="form-controls">
                                {{ Form::select('district_id', [], null, ['class'=>'form-control', 'id' => 'district_select']) }}
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#city_select').change(function() {
                                    $('#district_select').empty();
                                    var id = $(this).val();
                                    var _token = $('input[name="_token"]').val();
                                    $.ajax({
                                        type: 'get',
                                        url: "/ajaxDistrict",
                                        data: {'id' : id,
                                              '_token' : _token },
                                        success: function(data){
                                            for (var i = 0; i < data.length; i++) {
                                                $('#district_select').append("<option value="+data[i].id+">"+data[i].name+"</option>");
                                            }
                                        },
                                        error: function(data){
                                            alert("fail"+data)
                                        },

                                    });
                                });
                            });
                        </script>
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
