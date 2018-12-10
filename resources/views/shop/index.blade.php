@extends('layout.layout')

@section('content')
    @foreach ($products->chunk(4) as $productsChunk)
        <div class="row">
            @foreach ($productsChunk as $product)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail text">
                        <img class="img-responsive" src="{{$product->imgUrl}}" alt="{{ $product->name }}">
                        <div class="caption">
                        <h4>{{ $product->name }}</h4>
                            <p class="preview-text giveMeEllipsis">
                                {{ $product->description }}
                            </p>
                            <div class="clearfix cart-lower btn-info">
                                <div class="item-price pull-left ">
                                    {{ $product->currency }}{{ $product->itemPrice }}
                                </div>
                                <a href="#" class="btn btn-info pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection