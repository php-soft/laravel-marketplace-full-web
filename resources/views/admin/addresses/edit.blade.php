@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Address</div>
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
                    {{ Form::open(['route' => ['adminAddressesUpdate', $address->id], 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('first_name', 'User:') !!}
                            <div class="form-controls">
                                {{ Form::select('first_name', $users, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('street', 'Street:') !!}
                            <div class="form-controls">
                                {{ Form::text('street', $address->street, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'District:') !!}
                            <div class="form-controls">
                                {{ Form::select('district_id', $districts, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'City:') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', $cities, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Country:') !!}
                            <div class="form-controls">
                                {{ Form::select('country_id', $countries, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', 'Zip Code:') !!}
                            <div class="form-controls">
                                {{ Form::text('zip_code', $address->zip_code, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone Number:') !!}
                            <div class="form-controls">
                                {{ Form::text('phone_number', $address->phone_number, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminAddresses')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
