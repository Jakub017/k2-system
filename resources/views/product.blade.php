@extends('layouts.main') @section('content')

<div class="product">
    <div class="product__container">
        <div class="product__top">
            <div class="product__gallery">
                <div
                    style="
                        --swiper-navigation-color: #000;
                        --swiper-pagination-color: #000;
                    "
                    class="swiper mySwiper2 product__swiper"
                >
                    <div class="swiper-wrapper product__swiper-wrapper">
                        <div class="swiper-slide product__slide">
                            <img
                                src="{{ asset('storage/'.$product->thumbnail) }}"
                                class="product__image"
                            />
                        </div>
                        @foreach($product->images as $image)
                        <div class="swiper-slide product__slide">
                            <img
                                src="{{ asset('storage/'.$image) }}"
                                class="product__image"
                            />
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('storage/'.$product->thumbnail) }}"
                                alt=""
                                class="product__thumbnail"
                            />
                        </div>
                        @foreach($product->images as $image)
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('storage/'.$image) }}"
                                class="product__thumbnail"
                            />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="product__info">
                <h2 class="product__name">{{ $product->name }}</h2>
                <span class="product__price">{{ $product->price }} zł</span>
                @if($product->sku)
                <span class="product__sku">SKU: {{ $product->sku }}</span>
                @endif
                <div class="product__short-description">
                    {!! $product->short_description !!}
                </div>
                <a
                    href="mailto:biuro@ksero-k2system.pl?subject=Zapytanie o produkt {{ $product->name }}&body=Dzień dobry, %0A%0AChciał(a)bym uzyskać więcej informacji na temat produktu {{ $product->name }}.%0A%0APozdrawiam"
                    class="product__button"
                    >Zapytaj o produkt</a
                >
            </div>
        </div>
        <div class="product__content">
            <h2 class="product__heading">Opis szczegółowy</h2>
            {!! $product->content !!}
        </div>
    </div>
</div>

@endsection @section('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });
</script>
@endsection
