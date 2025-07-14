@extends('layouts.app')
@section('title', 'Shop')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

@section('content')
<div class=py-20 bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white border-b border-gray-100 sticky top-0 z-40 backdrop-blur-lg bg-white/80">
        <div class="container mx-auto px-4 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                        Amins Project Shop
                    </h1>
                    <p class="text-gray-600 mt-1">Temukan berbagai produk teknologi terbaik untuk kebutuhan bisnis dan personal Anda</p>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <div class="bg-blue-50 px-4 py-2 rounded-full">
                        <span class="text-blue-600 font-medium text-sm">{{ $products->count() + $featured_products->count() }} Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Left Sidebar - Category Filters -->
            <div class="lg:w-80 flex-shrink-0">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 sticky top-24">
                    <!-- Filter Header -->
                    <div class="p-6 border-b border-gray-100">
                        <h2 class="text-xl font-bold text-gray-900 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                            Filter Products
                        </h2>
                        <p class="text-gray-500 text-sm mt-1">Find exactly what you need</p>
                    </div>

                    <!-- Category Filters -->
                    <div class="p-6">
                        <div class="space-y-3">
                            <button class="category-filter active w-full text-left px-4 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-medium transition-all duration-300 hover:shadow-lg transform hover:-translate-y-0.5 flex items-center justify-between group" data-category="all">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    All Products
                                </span>
                                <div class="bg-white/20 px-2 py-1 rounded-full text-xs">
                                    {{ $products->count() + $featured_products->count() }}
                                </div>
                            </button>
                            
                            @foreach($categories as $category)
                                <button class="category-filter w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 text-gray-700 rounded-xl font-medium transition-all duration-300 hover:shadow-md transform hover:-translate-y-0.5 flex items-center justify-between group" data-category="{{ $category->slug }}">
                                    <span class="flex items-center">
                                        @if($category->icon)
                                            <i class="{{ $category->icon }} text-lg mr-3" style="color: {{ $category->color }};"></i>
                                        @else
                                            <div class="w-4 h-4 rounded-full mr-3" style="background-color: {{ $category->color }};"></div>
                                        @endif
                                        {{ $category->name }}
                                    </span>
                                    <div class="bg-gray-200 group-hover:bg-gray-300 px-2 py-1 rounded-full text-xs text-gray-600">
                                        {{ $category->products->count() }}
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="p-6 border-t border-gray-100 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-b-2xl">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">{{ $featured_products->count() }}</div>
                                <div class="text-xs text-gray-600">Featured</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-indigo-600">{{ $products->count() }}</div>
                                <div class="text-xs text-gray-600">Total</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="flex-1 min-w-0">
                <!-- Featured Products Section -->
                @if($featured_products->count() > 0)
                <div class="mb-12" id="products">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-yellow-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                Featured Products
                            </h2>
                            <p class="text-gray-600">Hand-picked premium selections</p>
                        </div>
                        <div class="hidden md:block">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $featured_products->count() }} items
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
                        @foreach($featured_products as $product)
                            <div class="product-card group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100" data-category="{{ $product->categories->first() ? $product->categories->first()->slug : 'uncategorized' }}">
                                <a href="{{ route('shop.product', $product->slug) }}" class="block">
                                    <div class="relative overflow-hidden">
                                        @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-56 w-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        @else
                                            <div class="h-56 bg-gradient-to-br from-blue-100 via-indigo-50 to-purple-100 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        
                                        <!-- Overlay Gradient -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        
                                        <!-- Badges -->
                                        <div class="absolute top-4 right-4 space-y-2">
                                            <div class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                ⭐ FEATURED
                                            </div>
                                            @if($product->sale_price)
                                                <div class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                                </div>
                                            @endif
                                            @if($product->created_at->diffInDays() < 7)
                                                <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    NEW
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <!-- Category Badge -->
                                        <div class="absolute top-4 left-4">
                                            @if($product->categories->first())
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 backdrop-blur-sm text-gray-700 shadow-sm">
                                                    {{ $product->categories->first()->name }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="p-6">
                                    <a href="{{ route('shop.product', $product->slug) }}" class="block group-hover:text-blue-600 transition-colors">
                                        <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 text-lg">{{ $product->name }}</h3>
                                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">{{ Str::limit($product->description, 100) }}</p>
                                    </a>
                                    
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            @if($product->sale_price)
                                                <span class="text-xl font-bold text-green-600">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                                                <span class="text-sm text-gray-500 line-through ml-2">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                            @else
                                                <span class="text-xl font-bold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }})"
                                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-4 py-3 rounded-xl text-sm font-medium transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg flex items-center justify-center group"
                                        target="_blank" rel="noopener noreferrer">
                                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                        </svg>
                                        Order via WhatsApp
                                    </a>
                                    
                                    <!-- Stock Info -->
                                    <div class="mt-3 flex items-center justify-between text-xs text-gray-500 bg-gray-50 rounded-lg px-3 py-2">
                                        <span class="flex items-center">
                                            <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                                            Stock: {{ $product->stock_quantity ?? 'Available' }}
                                        </span>
                                        <span>SKU: {{ $product->sku ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- All Products Section -->
                @if($products->count() > 0)
                <div class="mt-16">
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                                <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                                All Products
                            </h2>
                            <p class="text-gray-600">Complete collection of tech products</p>
                        </div>
                        <div class="hidden md:block">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $products->count() }} items
                            </span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-6">
                        @foreach($products as $product)
                            <div class="product-card group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100" data-category="{{ $product->categories->first() ? $product->categories->first()->slug : 'uncategorized' }}">
                                <a href="{{ route('shop.product', $product->slug) }}" class="block">
                                    <div class="relative overflow-hidden">
                                        @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-56 w-full object-cover group-hover:scale-110 transition-transform duration-700">
                                        @else
                                            <div class="h-56 bg-gradient-to-br from-gray-100 via-gray-50 to-blue-50 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        
                                        <!-- Overlay Gradient -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                        
                                        <!-- Badges -->
                                        <div class="absolute top-4 right-4 space-y-2">
                                            @if($product->sale_price)
                                                <div class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                                </div>
                                            @endif
                                            @if($product->created_at->diffInDays() < 7)
                                                <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                                    NEW
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <!-- Category Badge -->
                                        <div class="absolute top-4 left-4">
                                            @if($product->categories->first())
                                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-white/90 backdrop-blur-sm text-gray-700 shadow-sm">
                                                    {{ $product->categories->first()->name }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="p-6">
                                    <a href="{{ route('shop.product', $product->slug) }}" class="block group-hover:text-blue-600 transition-colors">
                                        <h3 class="font-bold text-gray-900 mb-2 line-clamp-2 text-lg">{{ $product->name }}</h3>
                                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">{{ Str::limit($product->description, 100) }}</p>
                                    </a>
                                    
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            @if($product->sale_price)
                                                <span class="text-xl font-bold text-green-600">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                                                <span class="text-sm text-gray-500 line-through ml-2">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                            @else
                                                <span class="text-xl font-bold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }})"
                                        class="w-full bg-gradient-to-r from-gray-800 to-gray-900 hover:from-gray-900 hover:to-black text-white px-4 py-3 rounded-xl text-sm font-medium transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg flex items-center justify-center group"
                                        target="_blank" rel="noopener noreferrer">
                                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                        </svg>
                                        Order via WhatsApp
                                    </a>
                                    
                                    <!-- Stock Info -->
                                    <div class="mt-3 flex items-center justify-between text-xs text-gray-500 bg-gray-50 rounded-lg px-3 py-2">
                                        <span class="flex items-center">
                                            <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                                            Stock: {{ $product->stock_quantity ?? 'Available' }}
                                        </span>
                                        <span>SKU: {{ $product->sku ?? 'N/A' }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    @if(method_exists($products, 'links'))
                        <div class="mt-12 flex justify-center">
                            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4">
                                {{ $products->links() }}
                            </div>
                        </div>
                    @endif
                </div>
                @endif

                <!-- Empty State -->
                @if((!isset($featured_products) || $featured_products->count() == 0) && (!isset($products) || $products->count() == 0))
                <div class="text-center py-20">
                    <div class="max-w-md mx-auto">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-full flex items-center justify-center mx-auto mb-8">
                            <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">No Products Available</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed">Products will be available soon. Please check back later or contact us for more information.</p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-xl font-medium transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Contact Us
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
/* Custom Styles */
* {
    font-family: 'Inter', sans-serif;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Product Card Animations */
.product-card {
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.02), rgba(99, 102, 241, 0.02));
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    z-index: 1;
}

.product-card:hover::before {
    opacity: 1;
}

/* Category Filter Styles */
.category-filter.active {
    background: linear-gradient(135deg, #2563eb, #4f46e5) !important;
    color: white !important;
    box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
}

.category-filter:not(.active) {
    background-color: #f9fafb;
    color: #374151;
}

.category-filter:not(.active):hover {
    background-color: #f3f4f6;
    color: #1f2937;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

/* Loading Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Staggered Animation */
.product-card:nth-child(1) { animation-delay: 0.1s; }
.product-card:nth-child(2) { animation-delay: 0.2s; }
.product-card:nth-child(3) { animation-delay: 0.3s; }
.product-card:nth-child(4) { animation-delay: 0.4s; }
.product-card:nth-child(5) { animation-delay: 0.5s; }
.product-card:nth-child(6) { animation-delay: 0.6s; }
.product-card:nth-child(7) { animation-delay: 0.7s; }
.product-card:nth-child(8) { animation-delay: 0.8s; }

/* Enhanced Button Hover Effects */
button:hover, a:hover {
    transform: translateY(-1px);
}

/* Badge Animations */
.absolute.top-4.right-4 > div {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .category-filter {
        font-size: 0.875rem;
        padding: 0.75rem 1rem;
    }
    
    .product-card {
        animation-delay: 0s !important;
    }
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Custom scrollbar for sidebar */
.lg\:w-80::-webkit-scrollbar {
    width: 4px;
}

.lg\:w-80::-webkit-scrollbar-track {
    background: #f1f5f9;
}

.lg\:w-80::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 2px;
}

.lg\:w-80::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filter functionality
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productCards = document.querySelectorAll('.product-card');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active state with smooth transition
            categoryFilters.forEach(f => {
                f.classList.remove('active');
                f.style.transform = 'scale(1)';
            });
            this.classList.add('active');
            this.style.transform = 'scale(1.02)';
            
            // Filter products with staggered animation
            let visibleCount = 0;
            productCards.forEach((card, index) => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(30px)';
                        card.style.animation = `fadeInUp 0.6s ease-out ${visibleCount * 0.1}s forwards`;
                        visibleCount++;
                    }, 50);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(-30px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
            
            // Smooth scroll to products section
            const productsSection = document.getElementById('products');
            if (productsSection) {
                setTimeout(() => {
                    productsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 100);
            }
        });
    });
    
    // Add loading state to WhatsApp buttons
    const whatsappButtons = document.querySelectorAll('a[href*="wa.me"]');
    whatsappButtons.forEach(button => {
        button.addEventListener('click', function() {
            const originalText = this.innerHTML;
            this.innerHTML = `
                <svg class="w-4 h-4 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Opening WhatsApp...
            `;
            
            setTimeout(() => {
                this.innerHTML = originalText;
            }, 2000);
        });
    });
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe all product cards
    productCards.forEach(card => {
        observer.observe(card);
    });
    
    // Add hover effects to category filters
    categoryFilters.forEach(filter => {
        filter.addEventListener('mouseenter', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            }
        });
        
        filter.addEventListener('mouseleave', function() {
            if (!this.classList.contains('active')) {
                this.style.transform = 'translateY(0) scale(1)';
            }
        });
    });
});
</script>
@endsection
