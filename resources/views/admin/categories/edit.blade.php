@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Category</div>

                <div class="panel-body">
                    {{ Form::model($category, ['route' => ['adminCategoriesUpdate', $category->id], 'method' => 'put']) }}
                        <div class="form-group">
                            {!! Form::label('name', 'Category Name') !!}
                            <div class="form-controls">
                                {{ Form::text('name', $category->name, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!!Form::label('type_id', 'Type')!!}
                            <div class="form-controls">
                                {!!Form::select('type_id', $types, null, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                        <a href="{{ route('adminCategories')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
