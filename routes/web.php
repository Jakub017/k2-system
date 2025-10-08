<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/sklep', 'shop')->name('shop');
    Route::get('/sklep/{product:slug}', 'product')->name('product');
    Route::get('/kontakt', 'contact')->name('contact');
    Route::get('/szukaj', 'search')->name('search');

    Route::get('/{slug}', 'page')->name('page');
});
