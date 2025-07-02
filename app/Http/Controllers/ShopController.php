<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Get all active categories with their icons and colors
        $categories = Category::active()->ordered()->get();
        
        // Get featured products that are active and in stock
        $featured_products = Product::with('category')
            ->active()
            ->featured()
            ->inStock()
            ->take(8)
            ->get();

        // Get all active products for the main product grid
        $all_products = Product::with('category')
            ->active()
            ->inStock()
            ->latest()
            ->take(12)
            ->get();

        return view('shop', compact('categories', 'featured_products', 'all_products'));
    }

    public function category(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->active()->firstOrFail();
        
        $products = Product::with('category')
            ->where('category_id', $category->id)
            ->active()
            ->inStock()
            ->latest()
            ->paginate(12);

        return view('shop.category', compact('category', 'products'));
    }

    public function product($slug)
    {
        $product = Product::with('category')
            ->where('slug', $slug)
            ->active()
            ->firstOrFail();

        $related_products = Product::with('category')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->active()
            ->inStock()
            ->take(4)
            ->get();

        return view('shop.product', compact('product', 'related_products'));
    }
}
