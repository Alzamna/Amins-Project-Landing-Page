<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $featured_products = Product::with('categories')
            ->active()
            ->featured()
            ->inStock()
            ->take(6)
            ->get();

        $categories = Category::active()
            ->ordered()
            ->withCount(['products' => function($query) {
                $query->active();
            }])
            ->get();

        $products = Product::with('categories')
            ->active()
            ->inStock()
            ->latest()
            ->paginate(12);

        return view('shop', compact('featured_products', 'categories', 'products'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        
        $products = Product::with('categories')
            ->whereHas('categories', function($query) use ($category) {
                $query->where('categories.id', $category->id);
            })
            ->active()
            ->inStock()
            ->latest()
            ->paginate(12);

        $categories = Category::active()
            ->ordered()
            ->withCount(['products' => function($query) {
                $query->active();
            }])
            ->get();

        return view('shop.category', compact('category', 'products', 'categories'));
    }

    public function product($slug)
    {
        $product = Product::with('categories')
            ->where('slug', $slug)
            ->active()
            ->firstOrFail();

        // Get related products from same categories
        $relatedProducts = Product::with('categories')
            ->whereHas('categories', function($query) use ($product) {
                $query->whereIn('categories.id', $product->categories->pluck('id'));
            })
            ->where('id', '!=', $product->id)
            ->active()
            ->inStock()
            ->take(4)
            ->get();

        return view('shop.product', compact('product', 'relatedProducts'));
    }
}
