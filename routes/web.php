<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Site\ArticleController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

// Publik – warna & info sama seperti kertasulantagaasli.com
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/ukuran-kertas-ulantaga', [PageController::class, 'sizes'])->name('sizes');
Route::get('/marketplace', [PageController::class, 'marketplace'])->name('marketplace');
Route::get('/kontak-kami', [ContactController::class, 'show'])->name('contact');
Route::post('/kontak-kami', [ContactController::class, 'store'])->name('contact.store');

// SEO: sitemap & robots
Route::get('/sitemap.xml', function () {
    $articles = Article::where('is_published', true)->latest('published_at')->get();
    $urls = [
        ['loc' => route('home'), 'priority' => '1.0'],
        ['loc' => route('about'), 'priority' => '0.8'],
        ['loc' => route('articles.index'), 'priority' => '0.9'],
        ['loc' => route('sizes'), 'priority' => '0.9'],
        ['loc' => route('marketplace'), 'priority' => '0.7'],
        ['loc' => route('contact'), 'priority' => '0.8'],
    ];
    foreach ($articles as $a) {
        $urls[] = ['loc' => route('articles.show', $a->slug), 'priority' => '0.7'];
    }

    return response()->view('site.sitemap', compact('urls'))->header('Content-Type', 'text/xml');
})->name('sitemap');

Route::get('/robots.txt', fn () => response("User-agent: *\nAllow: /\nSitemap: ".route('sitemap')."\n", 200)->header('Content-Type', 'text/plain'));
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('articles', AdminArticleController::class)->except(['show']);
        Route::resource('categories', AdminCategoryController::class)->except(['show']);
        Route::resource('products', AdminProductController::class)->except(['show']);
        Route::get('messages', [AdminMessageController::class, 'index'])->name('messages.index');
        Route::get('messages/{message}', [AdminMessageController::class, 'show'])->name('messages.show');
        Route::delete('messages/{message}', [AdminMessageController::class, 'destroy'])->name('messages.destroy');
    });
});
