@extends('layouts.main') @section('title', $page->title) @section('meta')

<meta name="description" content="{{ $page->meta_description }}" />
<meta name="keywords" content="{{ $page->meta_keywords }}" />

@endsection @section('content')

<div class="page">
    <div class="page__container">
        <h1 class="page__title">{{ $page->title }}</h1>
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
            <li class="page__breadcrumbs-item">
                {{$page->title}}
            </li>
        </ul>
        <div class="page__content">{!! $page->content !!}</div>
    </div>
</div>

@endsection
