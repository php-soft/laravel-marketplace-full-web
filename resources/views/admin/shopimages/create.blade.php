@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create Image</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{Form::open(['route'=>'adminShopImagesStore', 'files' => true])}}
                        <div class="form-group">
                            {!! Form::label('name', 'Shop Name') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id', $shops, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Photo') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('image') }}
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminShopImages')}}">Cancel</a>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
