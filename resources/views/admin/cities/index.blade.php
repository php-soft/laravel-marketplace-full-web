@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of cities</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($cities as $city)
                            <tr>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->created_at }}</td>
                                <td>{{ $city->updated_at }}</td>
                                
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
