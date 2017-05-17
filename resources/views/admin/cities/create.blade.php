@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Create Cities</div>

                <div class="panel-body">
                    {{ Form::open(['url'=>'admin/cities']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'City Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminCities')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection