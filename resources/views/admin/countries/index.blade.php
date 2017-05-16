@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of countries
                <div class="panel-heading"><a href="{{ route('adminCountriesCreate') }}"><button class="btn btn-primary">Create</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($countries as $country)
                            <tr>
                                <td>{{ $country->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
