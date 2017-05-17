@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Categories</div>

                <div class="panel-body">
                    {{ Form::open(['url'=>'admin/categories']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Category Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('type_id', 'Type')!!}
                            <div class="form-controls">
                                {!!Form::select('type_id', $types, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
