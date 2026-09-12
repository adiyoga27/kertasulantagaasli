<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Product;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalArticles' => Article::count(),
            'totalCategories' => Category::count(),
            'totalProducts' => Product::count(),
            'unreadMessages' => ContactMessage::where('is_read', false)->count(),
            'popularArticles' => Article::orderByDesc('views')->take(5)->get(),
            'latestMessages' => ContactMessage::latest()->take(5)->get(),
        ]);
    }
}
