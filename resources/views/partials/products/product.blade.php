<a href="#">
    <div class="col-md-3">
        <div class="thumbnail" style="height: 450px">
            <img class="img-responsive img-thumbnail" src="{{ asset('upload/'.$product->image) }}" alt="noImage" style="width: 300px;">
            <div class="caption">
                <h4>{{ $product->name }}</h4>
                <p>Price:{{ number_format($product->price) }}VND</p>
            </div>
        </div>
    </div>
</a>
