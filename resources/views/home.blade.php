@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ($types as $type)
                <a href="{{ route('showProductByType', ['id' => $type->id] ) }}"><h3>{{ $type->name }}</h3></a>
                <div class="panel-group">
                    @foreach ($type->categories(['limit' => 2]) as $category)
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <a href="{{ route('showProductByCategory', ['id' => $category->id] ) }}"><h4>{{ $category->name }}</h4></a>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    @foreach ($category->products(['limit' => 4, 'newest' => 1]) as $product)
                                        <a href={{ route('productsDetail', ['id' => $product->id]) }}>
                                            <div class="col-md-3">
                                                @include('partials.products.product')
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('showProductByCategory', ['id' => $category->id] ) }}"><button class="btn btn-xs btn-primary ">View more</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
