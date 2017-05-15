@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update District</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/updateDistrict/'.$district->id, 'method' => 'put'])}}
                        <table class="table table-hover">
                            <tr>
                                <td>District Name:</td>
                                <td>{{ Form::text('name', $district->name) }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{{Form::submit('Update')}}
                                <a href="{{ route('adminDistricts')}}"><button>Cancel</button></a>
                                </td>
                            </tr>
                        </table>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection