@extends('layouts.app')

@section('title', $category->name)

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
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $category->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Category Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full mb-4"
                 style="background-color: {{ $category->color }}20;">
                @if($category->icon)
                    <i class="{{ $category->icon }} text-3xl" style="color: {{ $category->color }};"></i>
                @else
                    <svg class="w-10 h-10" style="color: {{ $category->color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                @endif
            </div>
            <h1 class="text-4xl font-bold text-blue-900 mb-4">{{ $category->name }}</h1>
            @if($category->description)
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">{{ $category->description }}</p>
            @endif
        </div>

        <!-- Products Grid -->
        @if($products->count() > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($products as $product)
                    <div class="product-card group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <a href="{{ route('shop.product', $product->slug) }}" class="block relative">
                            <div class="relative">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover">
                                @else
                                    <div class="h-48 bg-gradient-to-br from-gray-100 to-gray-50 flex items-center justify-center">
                                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                    </div>
                                @endif
                                
                                <!-- Badges -->
                                <div class="absolute top-4 right-4 space-y-2">
                                    @if($product->sale_price)
                                        <div class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                            -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                        </div>
                                    @endif
                                    @if($product->is_featured)
                                        <div class="bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                            FEATURED
                                        </div>
                                    @endif
                                    @if($product->created_at->diffInDays() < 7)
                                        <div class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                            NEW
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </a>
                        
                        <div class="p-6">
                            <a href="{{ route('shop.product', $product->slug) }}" class="block">
                                <h3 class="font-bold text-blue-900 mb-2 line-clamp-2">{{ $product->name }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ Str::limit($product->description, 100) }}</p>
                            </a>
                            
                            <div class="flex items-center justify-between">
                                <div>
                                    @if($product->sale_price)
                                        <span class="text-lg font-bold text-green-600">Rp {{ number_format($product->sale_price, 0, ',', '.') }}</span>
                                        <span class="text-sm text-gray-500 line-through ml-2">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    @else
                                        <span class="text-lg font-bold text-blue-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    @endif
                                </div>
                                <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }})" 
                                   class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200" 
                                   target="_blank" rel="noopener noreferrer">
                                    Beli
                                </a>
                            </div>

                            <!-- Stock Info -->
                            <div class="mt-2 flex items-center justify-between text-xs text-gray-500">
                                <span>Stock: {{ $product->stock_quantity ?? 'Available' }}</span>
                                <span>SKU: {{ $product->sku ?? 'N/A' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16 bg-white rounded-2xl shadow-md">
                <div class="max-w-md mx-auto">
                    <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Produk</h3>
                    <p class="text-gray-500 mb-6">Belum ada produk dalam kategori ini. Silakan cek kategori lain atau kembali lagi nanti.</p>
                    <a href="{{ route('shop') }}" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-medium inline-block">
                        Kembali ke Shop
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>

<style>
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
}

.product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.03), rgba(147, 51, 234, 0.03));
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.product-card:hover::before {
    opacity: 1;
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

.product-card {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
    animation-delay: calc(var(--animation-order) * 0.1s);
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
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set animation delay for staggered appearance
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach((card, index) => {
        card.style.setProperty('--animation-order', index);
    });
    
    // WhatsApp integration
    const whatsappNumber = "6281234567890"; // Ganti dengan nomor WhatsApp bisnis Anda
    
    // Update WhatsApp links
    const updateWhatsAppLinks = () => {
        const whatsappLinks = document.querySelectorAll('a[href^="https://wa.me/"]');
        whatsappLinks.forEach(link => {
            const productName = link.closest('.product-card').querySelector('h3').textContent.trim();
            const productUrl = link.closest('.product-card').querySelector('a').href;
            
            const message = `Halo, saya tertarik dengan produk *${productName}*.\n\nApakah produk ini masih tersedia?\n\n${productUrl}`;
            link.href = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
        });
    };
    
    // Initialize
    updateWhatsAppLinks();
});
</script>
@endsection
