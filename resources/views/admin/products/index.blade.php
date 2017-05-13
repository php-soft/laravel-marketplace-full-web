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
                                    <a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash" >Delete</a>
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Warning!</h4>
                                              </div>
                                              <div class="modal-body">
                                                <p>Do you sure want to delete this product?</p><br>
                                                <h4>{{$product->name}}</h4>

                                              </div>
                                              <div class="modal-footer">
                                                <a href="{{ route('adminProducts_delete', ['id' => $product->id] ) }}"><button type="button" class="btn btn-danger">Yes</button></a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>


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
