@extends('layouts.app')

@section('title', $product->name)

@section('meta')
<meta name="description" content="{{ Str::limit(strip_tags($product->description), 160) }}">
<meta property="og:title" content="{{ $product->name }}">
<meta property="og:description" content="{{ Str::limit(strip_tags($product->description), 160) }}">
@if($product->image)
<meta property="og:image" content="{{ Storage::url($product->image) }}">
@endif
@endsection

@section('content')
<div class="bg-gray-50 py-12 md:py-20">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('shop') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Shop</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{ route('shop.category', $product->category->slug) }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">{{ $product->category->name }}</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $product->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Product Detail -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Product Images -->
                <div class="p-6 md:p-8 bg-gray-50">
                    <div class="product-gallery">
                        <div class="main-image mb-4 rounded-xl overflow-hidden bg-white border border-gray-200 shadow-md">
                            @if($product->image)
                                <img id="main-product-image" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-auto object-contain aspect-square">
                            @else
                                <div class="w-full aspect-square bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                                    <svg class="w-24 h-24 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Badges -->
                            <div class="absolute top-4 right-4 space-y-2">
                                @if($product->sale_price)
                                    <div class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                        -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                    </div>
                                @endif
                                @if($product->is_featured)
                                    <div class="bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                        FEATURED
                                    </div>
                                @endif
                                @if($product->created_at->diffInDays() < 7)
                                    <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                        NEW
                                    </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Thumbnail Gallery -->
                        <div class="thumbnail-gallery grid grid-cols-4 gap-2">
                            <!-- Main product image thumbnail -->
                            <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden border-2 border-blue-500">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-20 object-cover">
                                @else
                                    <div class="w-full h-20 bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Additional images would be added here if available -->
                            <!-- For now, we'll add placeholder thumbnails -->
                            @for($i = 0; $i < 3; $i++)
                                <div class="thumbnail-item cursor-pointer rounded-lg overflow-hidden border-2 border-transparent hover:border-blue-300 transition-all duration-200">
                                    <div class="w-full h-20 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="p-6 md:p-8">
                    <div class="mb-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            {{ $product->category->name }}
                        </span>
                        @if($product->stock_quantity > 0)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 ml-2">
                                In Stock
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 ml-2">
                                Out of Stock
                            </span>
                        @endif
                    </div>
                    
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
                    
                    <div class="flex items-center mb-6">
                        @if($product->sale_price)
                            <span class="text-3xl font-bold text-green-600">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                            <span class="text-xl text-gray-500 line-through ml-3">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        @else
                            <span class="text-3xl font-bold text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        @endif
                    </div>
                    
                    <div class="prose prose-blue max-w-none mb-8">
                        {!! $product->description !!}
                    </div>
                    
                    <!-- Product Specifications -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Specifications</h3>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">SKU</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $product->sku ?? 'N/A' }}</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Category</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $product->category->name }}</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Stock</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $product->stock_quantity ?? 'Available' }}</dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">Weight</dt>
                                    <dd class="mt-1 text-sm text-gray-900">{{ $product->weight ?? 'N/A' }} {{ $product->weight_unit ?? 'kg' }}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="space-y-4">
                        <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }}). Apakah produk ini masih tersedia?" 
                           class="w-full flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200"
                           target="_blank" rel="noopener noreferrer">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.523 0-10-4.477-10-10S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
                            </svg>
                            Pesan via WhatsApp
                        </a>
                        
                        <a href="{{ route('shop') }}" class="w-full flex items-center justify-center px-6 py-3 border border-gray-300 rounded-md shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                            Lihat Produk Lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Products -->
        @if($related_products->count() > 0)
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Produk Terkait</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($related_products as $related)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <a href="{{ route('shop.product', $related->slug) }}" class="block">
                        <div class="relative">
                            @if($related->image)
                                <img src="{{ Storage::url($related->image) }}" alt="{{ $related->name }}" class="h-48 w-full object-cover">
                            @else
                                <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            @if($related->sale_price)
                                <div class="absolute top-2 right-2 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                    -{{ round((($related->price - $related->sale_price) / $related->price) * 100) }}%
                                </div>
                            @endif
                        </div>
                        
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 mb-1 line-clamp-1">{{ $related->name }}</h3>
                            
                            <div class="flex items-center justify-between mt-2">
                                <div>
                                    @if($related->sale_price)
                                        <span class="text-sm font-bold text-green-600">Rp {{ number_format($related->sale_price, 0, ',', '.') }}</span>
                                        <span class="text-xs text-gray-500 line-through ml-1">Rp {{ number_format($related->price, 0, ',', '.') }}</span>
                                    @else
                                        <span class="text-sm font-bold text-gray-900">Rp {{ number_format($related->price, 0, ',', '.') }}</span>
                                    @endif
                                </div>
                                <span class="text-xs text-gray-500">{{ $related->category->name }}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<style>
/* Line clamp utility */
.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Product Gallery */
.product-gallery {
    position: relative;
}

.main-image {
    position: relative;
}

.thumbnail-item {
    transition: all 0.2s ease-in-out;
}

.thumbnail-item:hover {
    transform: translateY(-2px);
}

/* Badges Animation */
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

/* Button Hover Effects */
a.bg-green-600:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // WhatsApp number configuration
    const whatsappNumber = "6281234567890"; // Ganti dengan nomor WhatsApp bisnis Anda
    
    // Product name and URL for sharing
    const productName = "{{ $product->name }}";
    const productUrl = "{{ route('shop.product', $product->slug) }}";
    const productPrice = "{{ $product->sale_price ? number_format($product->sale_price, 0, ',', '.') : number_format($product->price, 0, ',', '.') }}";
    
    // Format WhatsApp message
    const formatWhatsAppMessage = () => {
        return `Halo, saya tertarik dengan produk *${productName}* dengan harga *Rp ${productPrice}*.\n\nApakah produk ini masih tersedia?\n\n${productUrl}`;
    };
    
    // Update WhatsApp links
    const updateWhatsAppLinks = () => {
        const whatsappLinks = document.querySelectorAll('a[href^="https://wa.me/"]');
        whatsappLinks.forEach(link => {
            link.href = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(formatWhatsAppMessage())}`;
        });
    };
    
    // Initialize
    updateWhatsAppLinks();
    
    // Thumbnail gallery functionality
    const thumbnails = document.querySelectorAll('.thumbnail-item');
    const mainImage = document.getElementById('main-product-image');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Remove active border from all thumbnails
            thumbnails.forEach(t => t.classList.remove('border-blue-500'));
            thumbnails.forEach(t => t.classList.add('border-transparent'));
            
            // Add active border to clicked thumbnail
            this.classList.remove('border-transparent');
            this.classList.add('border-blue-500');
            
            // Update main image (if we had multiple images)
            // For now, we're just demonstrating the UI interaction
            // mainImage.src = this.querySelector('img').src;
        });
    });
});
</script>
@endsection
