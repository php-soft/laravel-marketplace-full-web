@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Seach result</h3>
            <div class="row" class="col-md-3">
                @foreach ($products as $product)
                <div class="col-md-3">
                    @include('partials.products.product')
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
