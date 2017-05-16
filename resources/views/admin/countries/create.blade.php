
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Countries</div>

                <div class="panel-body">
                    {{ Form::open(['url'=>'admin/countries']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Country Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
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
