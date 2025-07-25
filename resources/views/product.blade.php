@extends('layouts.main') @section('content')

<div class="product">
    <div class="product__top">
        <div class="product__gallery"></div>
        <div class="product__info">
            <h2 class="product__name">{{ $product->name }}</h2>
            <span class="product__price">{{ $product->price }}</span>
            @if($product->sku)
            <span class="product__sku">SKU: {{ $product->sku }}</span>
            @endif
            <div class="product__short-description">
                {!! $product->short_description !!}
            </div>
        </div>
    </div>
    <div class="product__content">{!! $product->content !!}</div>
</div>

@endsection
