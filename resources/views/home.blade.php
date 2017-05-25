@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach ($types as $type)
                <h3>{{ $type->name }}</h3>
                <div class="panel-group">
                    @foreach ($type->categories(['limit' => 2]) as $category)
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                {{ $category->name }}
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    @foreach ($category->products(['limit' => 4, 'newest' => 1]) as $product)
                                        <a href="#">
                                            <div class="col-md-3">
                                                <div class="thumbnail" style="height: 450px">
                                                    <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 300px;height: 300px">
                                                    <div class="caption">
                                                        <h4>{{ $product->name }}</h4>
                                                        <p>Price:{{ number_format($product->price) }}VND</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="pull-right">
                                    <a href="{{ "#" }}"><button class="btn btn-xs btn-primary ">View more</button></a>
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
