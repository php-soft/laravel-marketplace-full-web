@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="panel-body">
                    <div class="col-md-5">
                        <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 400px;height: 400px">
                    </div>
                    <div class="col-md-7">
                        <h3>{{ $product->name }}</h3>
                        <div class='border-top'>
                            <h4>Shop:{{ $product->shop->name }}</h4>
                            <h3>Price:{{ number_format($product->price) }}VND</h3>
                            {{Form::open()}}
                                <div class="form-inline">
                                {!! Form::label('quantity', 'Quantity') !!}
                                <div class="form-controls">
                                {{ Form::select('qty', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], null, ['class'=>'form-control']) }}
                                <a href="{{ '#' }}"><button class="btn btn-success">Add to cart <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
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
    </div>
</div>
@endsection
