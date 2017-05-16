@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Cities</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/cities'])}}

                        Country Name:

                        {{ Form::text('name') }}

                        Country_id:

                        {{ Form::select('country_id', $countries)}}

                        {{Form::submit('Create')}}
                        
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection																																																																																												