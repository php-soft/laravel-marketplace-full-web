@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of Shops
                    <div class="pull-right"><a href="{{ route('adminShopCreate') }}"><button class="btn btn-xs btn-primary">Create new Shop</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>user</th>
                                <th>Type</th>
                                <th>City</th>
                                <th>Name</th>
                                <th>District</th>
                                <th>description</th>
                                <th>image</th>
                                <th>status</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $shop)
                                <tr>
                                    <td>{{ $shop->id }}</td>
                                    <td>{{ $shop->name }}</td>
                                    <td>{{ $shop->user->email }}</td>
                                    <td>{{ $shop->type->name }}</td>
                                    <td>{{ $shop->city->name }}</td>
                                    <td>{{ $shop->district->name }}</td>
                                    <td>{{ $shop->country->name }}</td>
                                    <td>{{ $shop->description }}</td>
                                    <td>{{ $shop->image }}</td>
                                    <td>{{ $shop->status }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('adminShopEdit', ['id' => $shop->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminShopsDelete', ['id' => $shop->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
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
