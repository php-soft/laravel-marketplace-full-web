@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-group">
                @foreach ($categories as $category)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>{{ $category->name }}</h2>
                            <div class="row">
                                @foreach ($category->products(['limit' => 4]) as $product)
                                    <a href="#">
                                        <div class="col-md-3">
                                            <div class="thumbnail">
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
                                <a href="{{ "#" }}"><button class="btn btn-xs btn-primary ">More>></button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
