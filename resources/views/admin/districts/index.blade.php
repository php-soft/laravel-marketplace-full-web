@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of districts</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($districts as $district)
                            <tr>
                                <td>{{ $district->name }}</td>
                                <td>
                                    <a href="{{ route('adminDistricts_update', ['id' => $district->id] ) }}"><span class="glyphicon glyphicon-trash" ><button type="button">Edit</button></a>
                                </td>
                                <td>
                                    <a href="{{ route('adminDistricts_delete', ['id' => $district->id] ) }}" ><span class="glyphicon glyphicon-trash" ><button type="button">Delete</button></a>
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
