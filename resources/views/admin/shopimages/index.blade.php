@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of shopImages</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($shopImages as $shopimage)
                            <tr>
                                <td>{{ $shopimage->shop['name'] }}</td>
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