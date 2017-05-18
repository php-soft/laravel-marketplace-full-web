@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of products
                <div class="panel-heading"><a href="{{ route('adminProductsCreate') }}"><button class="btn btn-primary ">Create</button></a></div>
                </div>
                
                <div class="panel-body">
                    <table class="table table-striped">
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Shop</td>
                                <td>Category</td>
                                <td>Created_at</td>
                                <td>Updated_at</td>
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
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
