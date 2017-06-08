@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of districts
                    <div class="pull-right"><a href="{{ route('adminDistrictsCreate') }}"><button class="btn btn-xs btn-primary">Create new district</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>City Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($districts as $district)
                                <tr>
                                    <td>{{ $district->id }}</td>
                                    <td>{{ $district->name }}</td>
                                    @if (!empty($district->city))
                                    <td>{{ $district->city->name }}</td>
                                    @endif
                                    <td class="text-right">
                                        <a href="{{ route('adminDistrictsEdit', ['id' => $district->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminDistrictsDelete', ['id' => $district->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $districts->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
