@extends('layouts.main') @section('content')

<div class="page">
    <div class="page__container">
        <h1 class="page__title">Sklep</h1>
        <ul class="page__breadcrumbs">
            <li class="page__breadcrumb-item">
                <a href="{{ route('home') }}" class="page__breadcrumbs-link"
                    >Strona główna</a
                >
            </li>
            <li class="page__breadcrumbs-item">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 -960 960 960"
                    class="page__breadcrumbs-spacer"
                >
                    <path
                        d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                    />
                </svg>
            </li>
            <li class="page__breadcrumbs-item">Sklep</li>
        </ul>
        <div class="products">
            <div class="products__container">
                @foreach($products as $product)
                <div class="products__item products__item--shop">
                    <div class="products__image-wrapper">
                        <img
                            src="{{ asset('storage/'.$product->thumbnail) }}"
                            alt="{{ $product->name }}"
                            class="products__image"
                        />
                    </div>
                    <div class="products__text">
                        <a href="#" class="products__name">
                            {{ $product->name }}
                        </a>
                        <div class="products__bottom">
                            <span class="products__price">
                                {{ $product->price }} zł</span
                            >
                            <a href="#" class="products__link"
                                >Zobacz produkt
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="products__icon"
                                    viewBox="0 -960 960 960"
                                >
                                    <path
                                        d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                                    /></svg
                            ></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
