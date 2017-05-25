@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Shop</div>

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
                    {{Form::open(['route'=>'adminShopStore', 'files' => true])}}
                        <div class="form-group">
                            {!! Form::label('name', 'Shop Name') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_id', 'User') !!}
                            <div class="form-controls">
                                {{ Form::select('user_id', $users, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('type_id', 'Type') !!}
                            <div class="form-controls">
                                {{ Form::select('type_id', $types, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('city_id', 'City') !!}
                            <div class="form-controls">
                                {{ Form::select('city_id', $cities, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('district_id', 'District') !!}
                            <div class="form-controls">
                                {{ Form::select('district_id', $districts, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('country_id', 'Country') !!}
                            <div class="form-controls">
                                {{ Form::select('country_id', $countries, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'description') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Photo') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('image') }}
                        <div class="form-group">
                            {!! Form::label('status', 'status') !!}
                            <div class="form-controls">
                                {{ Form::text('status', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminShops') }}">Cancel</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


