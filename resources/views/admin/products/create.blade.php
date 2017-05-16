@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create products</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/products', 'files' => true])}}
                        <div class="form-group">
                            {!! Form::label('name', 'Product Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('photo', 'Image:') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('image', 'Code:') !!}
                            <div class="form-controls">
                                {{ Form::text('image', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('description', 'Description:') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('price', 'Price:') !!}
                            <div class="form-controls">
                                {{ Form::text('price', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('quantity', 'Quantity:') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('category_id', 'Category:') !!}
                            <div class="form-controls">
                                {{ Form::select('category_id',$categories, null, ['class'=>'form-control']) }}
                            </div>
                            {!! Form::label('shop_id', 'Shop:') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id',$shops, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection