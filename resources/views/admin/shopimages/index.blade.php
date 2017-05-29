@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    List of shopimages
                    <div class="pull-right"><a href="{{ route('adminShopImagesCreate') }}"><button class="btn btn-xs btn-primary">Create new Image</button></a></div>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Shop name</th>
                                <th>Image</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shopImages as $shopimage)
                                <tr>
                                    <td>{{ $shopimage->id }}</td>
                                    <td>{{ $shopimage->shop->name }}</td>
                                    <td>{{ $shopimage->image }}</td>
                                    <td class="text-right">
                                        <a href="{{ route('adminShopImagesEdit', ['id' => $shopimage->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                        <a href="{{ route('adminShopImagesDelete', ['id' => $shopimage->id] ) }}"><button class="btn btn-xs btn-danger">Delete</button></a>
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
