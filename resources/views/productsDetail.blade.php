@extends('layouts.app')

@section('content')
<div class="container product-page">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5 product-img">
                <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage">
            </div>
            <div class="col-md-7 ">
                <h3>{{ $product->name }}</h3>
                <div class='border-top'>
                    <h4>Shop:{{ $product->shop->name }}</h4>
                    <h3>Price:{{ number_format($product->price) }}VND</h3>
                    {{Form::open(['route' => 'cartStore'])}}
                        {{ Form::hidden('id', $product->id) }}
                        {{ Form::hidden('name', $product->name) }}
                        {{ Form::hidden('price', $product->price) }}
                        {{ Form::hidden('image', $product->image) }}
                        <div class="form-inline">
                            {!! Form::label('qty', 'Quantity') !!}
                            <div class="form-controls">
                                {{ Form::select('qty', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], null, ['class'=>'form-control']) }}
                                <button class="btn btn-success">Add to cart <span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
                <div class='border-top margin-top'>
                    <h4>Description</h4>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
