@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of roles
                    <div class="pull-right"><a href="{{ route('adminRolesCreate') }}"><button class="btn btn-xs btn-primary">Create new role</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td class="text-right">
                                      <a href="{{ route('adminRolesEdit', ['id' => $role->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                      <a href="{{ route('adminRolesDelete', ['id' => $role->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
