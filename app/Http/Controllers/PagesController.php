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

    public function page($slug) {
        $page = Page::where('slug', $slug)->first();
        return view('page', compact('page'));
    }
}
