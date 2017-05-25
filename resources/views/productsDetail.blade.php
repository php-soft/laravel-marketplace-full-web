@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ $product->name }}
                </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 450px;height: 450px">
                    </div>
                    <div class="col-md-6">
                        <h3>Price:{{ number_format($product->price) }}VND</h3>
                        <h4>Shop:{{ $product->shop->name }}</h4>
                        <a href="{{ '#' }}"><button class="btn btn-success">Add to cart <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                        <h4>Description</h4>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
