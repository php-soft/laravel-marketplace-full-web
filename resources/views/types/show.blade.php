@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $type->name }}</h3>
            <div class="row">
                @foreach ($type->categories as $category)
                <div class="col-md-12">
                    <a href="{{ route('showProductByCategory', ['id' => $category->id] ) }}"><h4>{{ $category->name }}</h4></a>
                    <div>
                        @foreach ($category->products(['limit' => 4, 'newest' => true]) as $product)
                            <div class="col-md-3">
                                @include('partials.products.product')
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
