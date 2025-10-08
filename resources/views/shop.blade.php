@extends('layouts.main') @section('title', "Sklep") @section('meta')
<meta
    name="description"
    content="Sklep K2System: kserokopiarki i drukarki Konica Minolta Bizhub – nowe i poleasingowe. Sprawdzone modele, atrakcyjne ceny, gwarancja i wsparcie techniczne."
/>
<meta
    name="keywords"
    content="sklep kserokopiarki, Konica Minolta Bizhub, kopiarki poleasingowe, drukarki, tonery, C364e, C284e, C224e, C258, C308"
/>
@endsection @section('content')

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
                <a
                    href="{{ route('product', $product) }}"
                    class="products__item products__item--shop"
                >
                    <div class="products__image-wrapper">
                        <img
                            src="{{ asset('storage/'.$product->thumbnail) }}"
                            alt="{{ $product->name }}"
                            class="products__image"
                        />
                    </div>
                    <div class="products__text">
                        <h2 class="products__name">
                            {{ $product->name }}
                        </h2>
                        <div class="products__bottom">
                            <span class="products__price">
                                {{ $product->price }} zł</span
                            >
                            <span
                                href="{{ route('product', $product) }}"
                                class="products__link"
                                >Zobacz produkt
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="products__icon"
                                    viewBox="0 -960 960 960"
                                >
                                    <path
                                        d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"
                                    /></svg
                            ></span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
