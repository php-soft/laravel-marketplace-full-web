@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of addresses
                    <div class="pull-right"><a href="{{ route('adminAddressesCreate') }}"><button class="btn btn-xs btn-primary">Create new address</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User</th>
                                <th>Street</th>
                                <th>Zip Code</th>
                                <th>Phone Number</th>
                                <th>District Name</th>
                                <th>City Name</th>
                                <th>Country Name</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($addresses as $address)
                                <tr>
                                    <td>{{ $address->id }}</td>
                                    <td>{{ $address->user->id }}</td>
                                    <td>{{ $address->street }}</td>
                                    <td>{{ $address->zip_code }}</td>
                                    <td>{{ $address->phone_number }}</td>
                                    <td>{{ $address->district->name }}</td>
                                    <td>{{ $address->city->name }}</td>
                                    <td>{{ $address->country->name }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('adminAddressesEdit', ['id' => $address->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminAddressesDelete', ['id' => $address->id] ) }}" ><button class="btn btn-xs btn-danger">Delete</button></a>
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
