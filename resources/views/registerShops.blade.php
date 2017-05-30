@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="well">Register Shops</h1>
    <div class="col-lg-12 well">
        <div class="row">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{Form::open(['route'=>'registerShopStore', 'files' => true])}}
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-7 form-group">
                        {!! Form::label('name', 'Shop Name') !!}
                        <div class="form-controls">
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>
                    </div>           
                </div> 
                <div class="row">
                    <div class="col-sm-7 form-group ">
                        {!! Form::label('user_id', 'User') !!}
                        <div class="form-controls">
                            {{ Form::text('user_id',  $users->email , 
                            [ 'class'=>'form-control' , 'readonly' => 'true' ]) }}
                        </div >
                    </div>     
                </div>                
                <div class="row">
                  <div class="col-sm-6 form-group">
                    {!! Form::label('type_id', 'Type') !!}
                    <div class="form-controls">
                        {{ Form::select('type_id', $types, null, ['class'=>'form-control']) }}
                    </div>

                </div>
                <div class="col-sm-6 form-group">
                    {!! Form::label('country_id', 'Country') !!}
                    <div class="form-controls">
                        {{ Form::select('country_id', $countries, null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    {!! Form::label('district_id', 'District') !!}
                    <div class="form-controls">
                        {{ Form::select('district_id', $districts, null, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    {!! Form::label('city_id', 'City') !!}
                    <div class="form-controls">
                        {{ Form::select('city_id', $cities, null, ['class'=>'form-control']) }}
                    </div>
                </div>  
            </div> 
            <div class="row">
                <div class="form-group col-sm-11">
                    {!! Form::label('description', 'DesCription') !!}
                    <div class="form-controls">
                        {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-11">
                    {!! Form::label('photo', 'Photo') !!}
                    <div class="form-controls">
                        {{ Form::file('photo', null, ['class'=>'form-control']) }}
                    </div>
                </div>
                {{ Form::hidden('image') }}
            </div>
            {!! Form::submit('Register', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('adminShops') }}">Cancel</a>
           {{ Form::close() }} 
        </div>
    </form>
</div>
</div>
</div>
@endsection
