@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of Cities
                <div class="panel-heading"><a href="{{ route('adminCitiesCreate') }}"><button class="btn btn-primary">Create</button></a></div>
                </div>

                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($cities as $city)
                            <li class="list-group-item">
                                {{ $city->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection