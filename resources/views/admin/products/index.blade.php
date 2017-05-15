@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of products</div>

                <div class="panel-body">
                    <table class="table table-hover">
                            <tr>
                                <td>Name</td>
                                <td></td>
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
                                <td>{{ $product->name }}</td>
                                <td>
                                    <a href="" onclick="myFunction()"><span class="glyphicon glyphicon-trash" >Delete</a>
                                        <script>
                                        function myFunction() {
                                            var r = confirm("Do you sure you want to delete this item?");
                                            if (r == true) {
                                            }
                                        }
                                        </script>
                                    <a href="" >
                                        <span class="glyphicon glyphicon-leaf">Edit</span>
                                    </a>
                                    
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>{{ number_format($product->price) }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->shop['name'] }}</td>
                                <td>{{ $product->category['name'] }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('adminProducts_create')}}">Create Products</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
