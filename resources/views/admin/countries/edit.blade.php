@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Country</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/updateCountry/'.$country->id, 'method' => 'put'])}}
                        Country Name:
                        {{ Form::text('name', $country->name) }}
                        
                        {{Form::submit('Update')}}
                        <a href="{{ route('adminCountries')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
