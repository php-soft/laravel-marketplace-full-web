<div class="thumbnail">
    <a href="{{ route('productsDetail', ['id' => $product->id]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 300px;"></a>
    <div class="caption">
        <a href="{{ route('productsDetail', ['id' => $product->id]) }}"><h4>{{ $product->name }}</h4></a>
        <p>Price: {{ number_format($product->price) }} VND</p>
    </div>
</div>
