@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Create City</div>

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
                    {{ Form::open(['route'=>'adminCitiesStore']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'City Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('country_id', 'Country') !!}
                            <div class="form-controls">
                                {!! Form::select('country_id', $countries, null, ['class'=>'form-control']) !!}
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
