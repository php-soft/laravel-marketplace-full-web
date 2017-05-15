@extends('layouts.admin')
@section('header')
	<h2>Add a new category</h2>
 @stop
 @section('content')
 		{!!Form::open(['url'=>'admin/categories'])!!}
 		@include('partials.forms.category')
 		{!!Form::close()!!}
  @stop