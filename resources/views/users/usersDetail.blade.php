@extends('layouts.app')

@section('content')
<div class="container user-page">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5 user-img">
                <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$user->avatar) }}" alt="noImage">
            </div>
            <div class="col-md-7 ">
            <div>
                <h3><span class="label label-default">Information</span></h3>
                <a href="#"><button class="btn btn-xs btn-primary">Edit</button></a>
            </div>
                <div class='border-top'>
                    <ul class=" list-group">
                        <li class="list-group-item"><strong>First Name: </strong>{{ $user->first_name }}</li>
                        <li class="list-group-item"><strong>Last Name: </strong>{{ $user->last_name }}</li>
                        <li class="list-group-item"><strong>Date Of Birth: </strong>{{ $user->date_of_birth }}</li>
                        <li class="list-group-item"><strong>Phone Number: </strong>{{ $user->phone_number }}</li>
                        <li class="list-group-item"><strong>Email: </strong>{{ $user->email }}</li>
                        <li class="list-group-item"><strong>Address: </strong>{{ $user->address }}</li>
                        <li class="list-group-item"><strong>Country: </strong>{{ $user->country->name }}</li>
                        <li class="list-group-item"><strong>City: </strong>{{ $user->city->name }}</li>
                        <li class="list-group-item"><strong>District: </strong>{{ $user->district->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
