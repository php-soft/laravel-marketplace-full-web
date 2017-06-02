@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update User</div>
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
                    {{ Form::open(['route' => ['adminUsersUpdate', $user->id], 'method' => 'put']) }}
                        
                        <div class="form-group">
                            {!! Form::label('avatar', 'Avatar:') !!}
                            <div class="form-controls">
                                {{ Form::file('avatar', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$user->image) }}" alt="noImage" style="width: 200px;height: 200px">
                        {{ Form::hidden('image', $user->image) }}

                        <div class="form-group">
                            {!! Form::label('first_name', 'First Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('first_name', $user->first_name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('last_name', 'Last Name:') !!}
                            <div class="form-controls">
                                {{ Form::text('last_name', $user->last_name, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('date_of_birth', 'Date of birth:') !!}
                            <div class="form-controls">
                                {{ Form::text('date_of_birth', $user->date_of_birth, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('phone_number', 'Phone Number:') !!}
                            <div class="form-controls">
                                {{ Form::text('phone_number', $user->phone_number, ['class'=>'form-control']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Address:') !!}
                            <div class="form-controls">
                                {{ Form::text('address', $user->address, ['class'=>'form-control']) }}
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
                        
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminUsers')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
