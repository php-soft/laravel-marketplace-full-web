@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $category->name }}</h3>
            <div class="row">
                @foreach ($category->products(['newest' => 1]) as $product)
                    @include('partials.products.product')
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
