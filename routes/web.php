<?php

use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// DEBUG ROUTE - hapus setelah selesai debug
Route::get('/debug-auth', function() {
    return [
        'is_authenticated' => auth()->check(),
        'user' => auth()->user(),
        'session_id' => session()->getId(),
    ];
});

// AUTHENTICATION ROUTES
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
// Route login alternatif tanpa middleware guest
// Route::get('/login-alt', [AuthController::class, 'showLoginForm'])->name('login.alt');
// Tambahkan di routes/web.php
Route::get('/test-admin', function() {
    if (!auth()->check()) {
        return 'Not authenticated';
    }
    
    if (auth()->user()->role !== 'admin') {
        return 'Not admin. Role: ' . auth()->user()->role;
    }
    
    return 'Admin access OK! Redirecting to dashboard...';
})->middleware('auth');

// HALAMAN USER
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('tentang');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portofolio.show');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/category/{slug}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/shop/product/{slug}', [ShopController::class, 'product'])->name('shop.product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// HALAMAN ADMIN
Route::prefix('admin')->name('admin.')->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('blog-posts', BlogPostController::class);
    Route::resource('portfolios', AdminPortfolioController::class);
});

// Blog routes
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blogPost:slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
