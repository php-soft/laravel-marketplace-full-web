@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create products</div>

                <div class="panel-body">
                    {{Form::open(['url'=>'admin/storeProduct','files' => true])}}
                        <table class="table table-hover">
                            <tr>
                                <td>Product Name:</td>
                                <td>{{ Form::text('name') }}</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td>{{Form::file('photo')}}</td>
                            </tr>
                            <tr>
                                <td>Code:</td>
                                <td>{{ Form::text('image') }}</td>
                            </tr>
                            <tr>
                                <td>Description:</td>
                                <td>{{ Form::textarea('description') }}</td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td>{{ Form::text('price') }}</td>
                            </tr>
                            <tr>
                                <td>Quantity:</td>
                                <td>{{ Form::text('quantity') }}</td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>{{ Form::select('category_id',$categories)}}</td>
                            </tr>
                            <tr>
                                <td>Shop:</td>
                                <td>{{ Form::select('shop_id',$shops)}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{{Form::submit('Add')}}</td>
                            </tr>
                        </table>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
