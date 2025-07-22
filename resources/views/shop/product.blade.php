@extends('layouts.app')

@section('title', $product->name . ' - Shop')

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
                @if($product->categories->first())
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="{{ route('shop.category', $product->categories->first()->slug) }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">
                            {{ $product->categories->first()->name }}
                        </a>
                    </div>
                </li>
                @endif
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $product->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-8">
                <!-- Product Images -->
                <div class="space-y-4">
                    <!-- Main Image -->
                    <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden">
                        @if($product->image)
                            <img id="main-image" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover cursor-zoom-in">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <i class="fas fa-image text-gray-400 text-6xl"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Images -->
                    @if($product->images && count($product->images) > 0)
                    <div class="grid grid-cols-4 gap-2">
                        @if($product->image)
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 border-blue-500 thumbnail-img" 
                                 data-image="{{ Storage::url($product->image) }}">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover">
                            </div>
                        @endif
                        @foreach($product->images as $image)
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 border-transparent hover:border-blue-300 thumbnail-img" 
                                 data-image="{{ Storage::url($image) }}">
                                <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover">
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Product Info -->
                <div class="space-y-6">
                    <!-- Categories -->
                    <div class="flex flex-wrap gap-2">
                        @foreach($product->categories as $category)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium" 
                                  style="background-color: {{ $category->color }}20; color: {{ $category->color }}">
                                @if($category->icon)
                                    <i class="{{ $category->icon }} mr-1"></i>
                                @endif
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>

                    <!-- Product Name -->
                    <h1 class="text-3xl lg:text-4xl font-bold text-gray-900">{{ $product->name }}</h1>

                    <!-- Price -->
                    <div class="flex items-center space-x-4">
                        @if($product->sale_price)
                            <span class="text-3xl font-bold text-green-600">{{ $product->formatted_sale_price }}</span>
                            <span class="text-xl text-gray-500 line-through">{{ $product->formatted_price }}</span>
                            <span class="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded">
                                -{{ $product->discount_percentage }}%
                            </span>
                        @else
                            <span class="text-3xl font-bold text-gray-900">{{ $product->formatted_price }}</span>
                        @endif
                    </div>

                    <!-- Stock Status -->
                    <div class="flex items-center space-x-2">
                        @if($product->stock_status === 'in_stock')
                            <span class="flex items-center text-green-600">
                                <i class="fas fa-check-circle mr-2"></i>
                                In Stock
                            </span>
                        @elseif($product->stock_status === 'out_of_stock')
                            <span class="flex items-center text-red-600">
                                <i class="fas fa-times-circle mr-2"></i>
                                Out of Stock
                            </span>
                        @else
                            <span class="flex items-center text-yellow-600">
                                <i class="fas fa-clock mr-2"></i>
                                On Backorder
                            </span>
                        @endif
                        
                        @if($product->stock_quantity)
                            <span class="text-gray-500">• {{ $product->stock_quantity }} available</span>
                        @endif
                    </div>

                    <!-- Short Description -->
                    @if($product->short_description)
                    <div class="text-gray-600 text-lg leading-relaxed">
                        {{ $product->short_description }}
                    </div>
                    @endif

                    <!-- Product Details -->
                    <div class="grid grid-cols-2 gap-4 py-4 border-t border-b border-gray-200">
                        @if($product->sku)
                        <div>
                            <span class="text-sm font-medium text-gray-500">SKU:</span>
                            <span class="text-sm text-gray-900 ml-2">{{ $product->sku }}</span>
                        </div>
                        @endif
                        
                        @if($product->weight)
                        <div>
                            <span class="text-sm font-medium text-gray-500">Weight:</span>
                            <span class="text-sm text-gray-900 ml-2">{{ $product->weight }} kg</span>
                        </div>
                        @endif
                        
                        @if($product->dimensions)
                        <div>
                            <span class="text-sm font-medium text-gray-500">Dimensions:</span>
                            <span class="text-sm text-gray-900 ml-2">{{ $product->dimensions }}</span>
                        </div>
                        @endif
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-4">
                        @if($product->stock_status === 'in_stock')
                            <a href="https://wa.me/6281234567890?text=Halo, saya tertarik dengan produk {{ urlencode($product->name) }} ({{ route('shop.product', $product->slug) }}). Harga: {{ urlencode($product->sale_price ? $product->formatted_sale_price : $product->formatted_price) }}" 
                               class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center text-lg"
                               target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp mr-3 text-xl"></i>
                                Pesan via WhatsApp
                            </a>
                        @else
                            <button class="w-full bg-gray-400 text-white font-bold py-4 px-6 rounded-xl cursor-not-allowed text-lg" disabled>
                                <i class="fas fa-times-circle mr-3"></i>
                                Out of Stock
                            </button>
                        @endif
                        
                        <button class="w-full border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-4 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center text-lg">
                            <i class="fas fa-heart mr-3"></i>
                            Add to Wishlist
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Description & Specifications -->
            @if($product->description || ($product->specifications && count($product->specifications) > 0))
            <div class="border-t border-gray-200 p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Description -->
                    @if($product->description)
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Description</h3>
                        <div class="prose prose-lg text-gray-600">
                            {!! $product->description !!}
                        </div>
                    </div>
                    @endif

                    <!-- Specifications -->
                    @if($product->specifications && count($product->specifications) > 0)
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Specifications</h3>
                        <div class="space-y-3">
                            @foreach($product->specifications as $key => $value)
                                <div class="flex justify-between py-2 border-b border-gray-100">
                                    <span class="font-medium text-gray-700">{{ ucfirst(str_replace('_', ' ', $key)) }}:</span>
                                    <span class="text-gray-600">{{ $value }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <!-- Related Products -->
        @if($relatedProducts && $relatedProducts->count() > 0)
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Related Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <a href="{{ route('shop.product', $relatedProduct->slug) }}" class="block">
                            <div class="relative">
                                @if($relatedProduct->image)
                                    <img src="{{ Storage::url($relatedProduct->image) }}" alt="{{ $relatedProduct->name }}" 
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400 text-3xl"></i>
                                    </div>
                                @endif
                                
                                @if($relatedProduct->discount_percentage > 0)
                                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-bold">
                                        -{{ $relatedProduct->discount_percentage }}%
                                    </div>
                                @endif
                            </div>
                            
                            <div class="p-4">
                                <h3 class="font-bold text-gray-900 mb-2 line-clamp-2">{{ $relatedProduct->name }}</h3>
                                <div class="flex items-center justify-between">
                                    @if($relatedProduct->sale_price)
                                        <div class="flex flex-col">
                                            <span class="text-lg font-bold text-green-600">{{ $relatedProduct->formatted_sale_price }}</span>
                                            <span class="text-sm text-gray-500 line-through">{{ $relatedProduct->formatted_price }}</span>
                                        </div>
                                    @else
                                        <span class="text-lg font-bold text-gray-900">{{ $relatedProduct->formatted_price }}</span>
                                    @endif
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

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="modalImage" src="/placeholder.svg" alt="" class="max-w-full max-h-full object-contain">
        <button id="closeModal" class="absolute top-4 right-4 text-white hover:text-gray-300 text-3xl">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.cursor-zoom-in {
    cursor: zoom-in;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image gallery functionality
    const mainImage = document.getElementById('main-image');
    const thumbnails = document.querySelectorAll('.thumbnail-img');
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const closeModal = document.getElementById('closeModal');
    
    // Thumbnail click handler
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const newImageSrc = this.dataset.image;
            if (mainImage) {
                mainImage.src = newImageSrc;
            }
            
            // Update active thumbnail
            thumbnails.forEach(t => t.classList.remove('border-blue-500'));
            thumbnails.forEach(t => t.classList.add('border-transparent'));
            this.classList.remove('border-transparent');
            this.classList.add('border-blue-500');
        });
    });
    
    // Main image click handler (zoom)
    if (mainImage) {
        mainImage.addEventListener('click', function() {
            modalImage.src = this.src;
            imageModal.classList.remove('hidden');
        });
    }
    
    // Close modal handlers
    if (closeModal) {
        closeModal.addEventListener('click', function() {
            imageModal.classList.add('hidden');
        });
    }
    
    if (imageModal) {
        imageModal.addEventListener('click', function(e) {
            if (e.target === imageModal) {
                imageModal.classList.add('hidden');
            }
        });
    }
    
    // Keyboard handler for modal
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !imageModal.classList.contains('hidden')) {
            imageModal.classList.add('hidden');
        }
    });
});
</script>
@endsection
