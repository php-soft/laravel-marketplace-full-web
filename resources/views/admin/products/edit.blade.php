@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update product</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ Form::open(['route'=>[ 'adminProductsUpdate', $product->id ], 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Product Name') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $product->name, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', $product->description, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price') !!}
                            <div class="form-controls">
                                {{ Form::text('price', $product->price, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', $product->quantity, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            <div class="form-controls">
                                {{ Form::select('category_id', $categories, $product->category_id, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shop_id', 'Shop') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id', $shops, $product->shop_id, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminProducts') }}">Cancel</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
