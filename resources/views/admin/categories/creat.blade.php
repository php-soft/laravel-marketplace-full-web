@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of Categories</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Category Name</th>
                                <th>Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->type->name }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="categories/edit/{{$category->id}}">Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="categories/delete/{{$category->id}}">Delete</a></td>
                            </tr>
                        @endforeach    
                        </tbody>
                    </table>
                    <a href="categories/create">Add</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

