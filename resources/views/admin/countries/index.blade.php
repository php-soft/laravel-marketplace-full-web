@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of countries</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($countries as $country)
                            <tr>
                                <td>{{ $country->name }}</td>
                                <td>
                                    <a href="{{ route('adminCountries_update', ['id' => $country->id] ) }}"><span class="glyphicon glyphicon-trash" ><button type="button">Edit</button></a>
                                </td>
                                <td>
                                    <a href="{{ route('adminCountries_delete', ['id' => $country->id] ) }}" ><span class="glyphicon glyphicon-trash" ><button type="button">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
