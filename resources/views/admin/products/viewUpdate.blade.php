@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update products</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/updateProduct/'.$product->id,'files' => true, 'method' => 'put'])}}
                        <table class="table table-hover">
                            <tr>
                                <td>Product Name:</td>
                                <td>{{ Form::text('name', $product->name) }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>
                                <img src="{{asset('upload/'.$product->image.'.png')}}" style="width: 200px;">
                                {{ Form::file('photo') }}</td>
                            </tr>
                            <tr>
                                <td>Code:</td>
                                <td>{{ Form::text('image', $product->image) }}</td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td>{{ Form::textarea('description', $product->description) }}</td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td>{{ Form::text('price', $product->price) }}</td>
                            </tr>
                            <tr>
                                <td>Quantity:</td>
                                <td>{{ Form::text('quantity', $product->quantity) }}</td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>{{ Form::select('category_id', $categories, $product->category['id']) }}</td>
                            </tr>
                            <tr>
                                <td>Shop:</td>
                                <td>{{ Form::select('shop_id', $shops, $product->shop['id']) }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{{Form::submit('Update')}}
                                <a href="{{ route('adminProducts')}}" style="display: inline-block;background: #acacac;width: 75px;border: 1px solid #f8f8f8;text-decoration:none;text-align: center;padding: .2em">Cancel</a>
                                </td>
                            </tr>
                        </table>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
