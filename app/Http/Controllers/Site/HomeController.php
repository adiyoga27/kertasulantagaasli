<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featured = Article::where('is_published', true)
            ->where('is_featured', true)
            ->latest('published_at')
            ->first();

        $latest = Article::with('category')
            ->where('is_published', true)
            ->latest('published_at')
            ->take(6)
            ->get();

        $popular = Article::with('category')
            ->where('is_published', true)
            ->orderByDesc('views')
            ->take(4)
            ->get();

        $products = Product::where('is_available', true)
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        $categories = Category::withCount(['articles' => function ($q) {
            $q->where('is_published', true);
        }])->get();

        return view('site.home', compact('featured', 'latest', 'popular', 'products', 'categories'));
    }
}
