@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of Types</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->created_at }}</td>
                                <td>{{ $type->updated_at }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
