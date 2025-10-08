<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();
        return view('home', compact('products'));
    }

    public function shop() {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('shop', compact('products'));
    }

    public function product(Product $product) {
        return view('product', compact('product'));
    }

    public function search(Request $request) {
        $products = Product::search($request->input('query'))->get();
        $phrase = $request->input('query');

        return view('search', compact('products', 'phrase'));
    }

    public function page($slug) {
        $page = Page::where('slug', $slug)->first();
        return view('page', compact('page'));
    }
}
