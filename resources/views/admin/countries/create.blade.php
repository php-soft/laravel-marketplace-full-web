
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Countries</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/countries'])}}
                    <div class="form-group">
                        {!!Form::label('name', 'Country Name:')!!}
                    </div>
                    <div class="form-controls">
                        {{ Form::text('name') }}
                    </div><br>
                        {{Form::submit('Create')}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
