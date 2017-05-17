@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update City</div>

                <div class="panel-body">
                    {{ Form::open(['url'=>'admin/cities/'.$city->id, 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'City Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $city->name, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::submit('Update') }}
                        <a href="{{ route('adminCities')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection