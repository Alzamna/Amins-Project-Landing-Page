@extends('layouts.app')

@section('title', $category->name . ' - Shop')

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="{{ route('shop') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Shop</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $category->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Category Header -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <div class="flex items-center space-x-4">
                @if($category->icon)
                    <div class="w-16 h-16 rounded-full flex items-center justify-center text-2xl" 
                         style="background-color: {{ $category->color }}20; color: {{ $category->color }}">
                        <i class="{{ $category->icon }}"></i>
                    </div>
                @endif
                <div>
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900">{{ $category->name }}</h1>
                    @if($category->description)
                        <p class="text-gray-600 mt-2">{{ $category->description }}</p>
                    @endif
                    <p class="text-sm text-gray-500 mt-1">{{ $products->total() }} products found</p>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($products as $product)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <a href="{{ route('shop.product', $product->slug) }}" class="block">
                            <div class="relative">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" 
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                                    </div>
                                @endif
                                
                                @if($product->discount_percentage > 0)
                                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                        -{{ $product->discount_percentage }}%
                                    </div>
                                @endif
                                
                                @if($product->is_featured)
                                    <div class="absolute top-2 right-2 bg-yellow-500 text-white px-2 py-1 rounded text-xs font-bold">
                                        <i class="fas fa-star"></i>
                                    </div>
                                @endif
                            </div>
                        </a>
                        
                        <div class="p-4">
                            <a href="{{ route('shop.product', $product->slug) }}" class="block">
                                <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">{{ $product->name }}</h3>
                                @if($product->short_description)
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product->short_description }}</p>
                                @endif
                            </a>
                            
                            <div class="flex items-center justify-between mb-3">
                                @if($product->sale_price)
                                    <div class="flex flex-col">
                                        <span class="text-lg font-bold text-green-600">{{ $product->formatted_sale_price }}</span>
                                        <span class="text-sm text-gray-500 line-through">{{ $product->formatted_price }}</span>
                                    </div>
                                @else
                                    <span class="text-lg font-bold text-gray-900">{{ $product->formatted_price }}</span>
                                @endif
                                
                                @if($product->stock_status === 'in_stock')
                                    <span class="text-green-600 text-xs">
                                        <i class="fas fa-check-circle"></i> Available
                                    </span>
                                @else
                                    <span class="text-red-600 text-xs">
                                        <i class="fas fa-times-circle"></i> Out of Stock
                                    </span>
                                @endif
                            </div>
                            
                            <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }})" 
                               class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 text-center block text-sm"
                               target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp mr-2"></i>
                                Order via WhatsApp
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($products->hasPages())
                <div class="mt-12 flex justify-center">
                    {{ $products->links() }}
                </div>
            @endif
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">No Products Found</h3>
                    <p class="text-gray-500 mb-6">There are no products in this category yet.</p>
                    <a href="{{ route('shop') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium">
                        Browse All Products
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
