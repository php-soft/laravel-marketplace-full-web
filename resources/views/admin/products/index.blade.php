@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">List of products
                    <div class="pull-right">
                        <a href="{{ route('adminProductsCreate') }}"><button class="btn btn-xs btn-primary ">Create new product</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Shop</th>
                                <th>Category</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ number_format($product->price) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->shop->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>
                                    <a href="{{ route('adminProductsEdit', ['id' => $product->id] ) }}"><button class="btn btn-xs btn-primary">Edit</button></a>
                                    <a href="#" ><button class="btn btn-xs btn-danger">Delete</button></a>
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
