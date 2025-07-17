<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\UserController;

// DEBUG ROUTES - Remove after debugging
Route::get('/debug-auth', function() {
    return [
        'is_authenticated' => auth()->check(),
        'user' => auth()->user(),
        'session_id' => session()->getId(),
    ];
});

Route::get('/force-logout', function() {
    auth()->logout();
    session()->flush();
    session()->regenerate();
    return redirect('/')->with('message', 'Logged out successfully');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    // Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    // Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static Pages
Route::get('/about', function () {
    return view('about');
})->name('tentang');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blogPost:slug}', [BlogController::class, 'show'])->name('blog.show');

// Portfolio Routes
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portofolio');
Route::get('/portofolio/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portofolio.show');

// Shop Routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/category/{slug}', [ShopController::class, 'category'])->name('shop.category');
Route::get('/shop/product/{slug}', [ShopController::class, 'product'])->name('shop.product');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Product Management
    Route::resource('products', ProductController::class);
    
    // Category Management
    Route::resource('categories', CategoryController::class);
    
    // Blog Management
    Route::resource('blog-posts', BlogPostController::class);
    
    // Portfolio Management
    Route::resource('portfolios', AdminPortfolioController::class);

    // User Management
    Route::resource('users', UserController::class);

});

/*
|--------------------------------------------------------------------------
| User Profile Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
