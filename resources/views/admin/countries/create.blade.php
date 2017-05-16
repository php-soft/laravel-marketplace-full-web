
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Countries</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/countries'])}}
                        Country Name:
                        {{ Form::text('name') }}
                        
                        {{Form::submit('Create')}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
