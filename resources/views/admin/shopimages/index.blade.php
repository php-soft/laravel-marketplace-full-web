@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of shopimages</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($shopimages as $shopimage)
                            <tr>
                                <td>{{ $shopimage->shop_id }}</td>
                                <td>{{ $shopimage->image }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection