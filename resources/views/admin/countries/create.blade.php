
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Countries</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/countries'])}}
                        <table class="table table-hover">
                            <tr>
                                <td>Country Name:</td>
                                <td>{{ Form::text('name') }}</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>{{Form::submit('Create')}}</td>
                           </tr>
                        </table>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection