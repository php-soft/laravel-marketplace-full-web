@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $category->name }}</h3>
            <div class="row" class="col-md-3">
                @foreach ($products as $product)
                <div class="col-md-3">
                    @include('partials.products.product')
                </div>
                @endforeach
            </div>
        </div>
        <div>
            <ul class="pagination">
              <li><a href="{{ $products->url(1) }}">First</a></li>
              <li><a href="{{ $products->url($prev_current) }}">&laquo;</a></li>
              <li><a href="{{ $products->previousPageUrl() }}">Prev</a></li>
              <li class="active"><a href="{{ $products->currentPage() }}">{{ $products->currentPage() }}</a></li>
              <li><a href="{{ $products->nextPageUrl() }}">Next</a></li>
              <li><a href="{{ $products->url($next_current) }}">&raquo;</a></li>
              <li><a href="{{ $products->url($products->lastPage()) }}">Last</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
