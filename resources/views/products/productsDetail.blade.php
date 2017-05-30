@extends('layouts.app')

@section('content')
<div class="container product-page">
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
                                {{ Form::text('qty', 1, ['class'=>'form-control', 'size' => 1 ]) }}
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
    <div class='border-top margin-top'>
        <h3>SIMILAR PRODUCTS</h3>
        <div class="row">
            @foreach ($product->category->products(['limit' => 4, 'newest' => 1, 'similar' => $product->id]) as $product)
                <a href={{ route('productsDetail', ['id' => $product->id]) }}>
                    <div class="col-md-3">
                        @include('partials.products.product')
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
