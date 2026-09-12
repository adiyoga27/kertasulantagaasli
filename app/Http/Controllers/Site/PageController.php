<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;

class PageController extends Controller
{
    public function about()
    {
        $latest = Article::where('is_published', true)->latest('published_at')->take(3)->get();

        return view('site.about', compact('latest'));
    }

    public function sizes()
    {
        $products = Product::where('is_available', true)->orderBy('sort_order')->get();

        return view('site.sizes', compact('products'));
    }

    public function marketplace()
    {
        $products = Product::where('is_available', true)->orderBy('sort_order')->get();

        return view('site.marketplace', compact('products'));
    }
}
