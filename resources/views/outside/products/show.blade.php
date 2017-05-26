@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        {{ $category->name }}
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach ($category->products(['newest' => 1]) as $product)
                                <a href="#">
                                    <div class="col-md-3">
                                        <div class="thumbnail" style="height: 450px">
                                            <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 300px; height: 300px">
                                            <div class="caption">
                                                <h4>{{ $product->name }}</h4>
                                                <p>Price:{{ number_format($product->price) }}VND</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
