@extends('layouts.app')

@section('title', 'Shop')

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

@section('content')
<!-- Shop Categories Section -->
<section class="py-20 bg-gray-50 min-h-screen">
  <div class="container mx-auto px-4">
      <!-- Header -->
      <div class="text-center mb-16">
          <h1 class="text-4xl lg:text-5xl font-bold text-blue-900 mb-4">
              Shop
          </h1>
          <p class="text-gray-600 text-lg max-w-2xl mx-auto">
              Temukan berbagai produk teknologi terbaik untuk kebutuhan bisnis dan personal Anda
          </p>
      </div>

      <!-- Simple Categories Filter -->
      <div class="max-w-4xl mx-auto mb-16">
          <div class="bg-white rounded-2xl p-6 shadow-lg">
              <h3 class="text-lg font-semibold text-gray-800 mb-4">Filter by Category:</h3>
              <div class="flex flex-wrap gap-3">
                  <button class="category-filter active px-4 py-2 bg-blue-900 text-white rounded-full text-sm font-medium hover:bg-blue-800 transition-all duration-200" data-category="all">
                      All Products
                  </button>
                  @foreach($categories as $category)
                      <button class="category-filter px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition-all duration-200" data-category="{{ $category->slug }}">
                          {{ $category->name }}
                      </button>
                  @endforeach
              </div>
          </div>
      </div>

      {{-- <!-- Categories Grid -->
      <div class="max-w-6xl mx-auto mb-16">
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
              @foreach($categories as $category)
                  <div class="category-card group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer transform hover:-translate-y-3" 
                       data-category="{{ $category->slug }}">
                      <div class="text-center">
                          <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-all duration-300"
                               style="background-color: {{ $category->color }}20;">
                              @if($category->icon)
                                  <i class="{{ $category->icon }} text-2xl" style="color: {{ $category->color }};"></i>
                              @else
                                  <svg class="w-8 h-8" style="color: {{ $category->color }};" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                  </svg>
                              @endif
                          </div>
                          <h3 class="text-sm font-bold text-blue-900 group-hover:text-blue-700 transition-colors duration-300">
                              {{ strtoupper($category->name) }}
                          </h3>
                      </div>
                  </div>
              @endforeach
          </div>
      </div> --}}

      <!-- Featured Products Section -->
      @if($featured_products->count() > 0)
      <div class="mb-20" id="products">
          <div class="text-center mb-12">
              <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                  Produk Unggulan
              </h2>
              <p class="text-gray-600 text-lg">
                  Pilihan terbaik dari setiap kategori produk kami
              </p>
          </div>

          <!-- Featured Products Grid -->
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
              @foreach($featured_products as $product)
                  <div class="product-card group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-category="{{ $product->categories->first() ? $product->categories->first()->slug : 'uncategorized' }}">
                      <a href="{{ route('shop.product', $product->slug) }}" class="block relative">
                          <div class="relative">
                              @if($product->image)
                                  <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-48 w-full object-cover">
                              @else
                                  <div class="h-48 bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
                                      <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                              <!-- Category Badge -->
                              <div class="absolute top-4 left-4">
                                  @if($product->categories->first())
                                      <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-600 text-white">
                                          {{ $product->categories->first()->name }}
                                      </span>
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
                                 class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 add-to-cart" 
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
      </div>
      @endif

      <!-- All Products Section -->
      @if($products->count() > 0)
      <div class="mt-20">
          <div class="text-center mb-12">
              <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                  Semua Produk
              </h2>
              <p class="text-gray-600 text-lg">
                  Jelajahi koleksi lengkap produk teknologi kami
              </p>
          </div>

          <!-- All Products Grid -->
          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
              @foreach($products as $product)
                  <div class="product-card group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-category="{{ $product->categories->first() ? $product->categories->first()->slug : 'uncategorized' }}">
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
                                  @if($product->created_at->diffInDays() < 7)
                                      <div class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                          NEW
                                      </div>
                                  @endif
                              </div>

                              <!-- Category Badge -->
                              <div class="absolute top-4 left-4">
                                  @if($product->categories->first())
                                      <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-600 text-white">
                                          {{ $product->categories->first()->name }}
                                      </span>
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
                                 class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 add-to-cart" 
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
          @if(method_exists($products, 'links'))
              <div class="mt-12">
                  {{ $products->links() }}
              </div>
          @endif
      </div>
      @endif

      <!-- Empty State -->
      @if((!isset($featured_products) || $featured_products->count() == 0) && (!isset($products) || $products->count() == 0))
      <div class="mt-20 text-center py-16">
          <div class="max-w-md mx-auto">
              <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
              </svg>
              <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Produk</h3>
              <p class="text-gray-500 mb-6">Produk akan segera tersedia. Silakan kembali lagi nanti.</p>
              <a href="{{ route('contact') }}" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-medium">
                  Hubungi Kami
              </a>
          </div>
      </div>
      @endif
  </div>
</section>

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

/* Category Filter Styles */
.category-filter.active {
  background-color: #1e3a8a !important;
  color: white !important;
}

.category-filter:not(.active):hover {
  background-color: #f3f4f6;
  color: #374151;
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
}

/* Responsive Design */
@media (max-width: 768px) {
  .category-filter {
      font-size: 0.75rem;
      padding: 0.5rem 0.75rem;
  }
}

/* Enhanced Button Hover Effects */
button:hover {
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
  // Category filter functionality
  const categoryFilters = document.querySelectorAll('.category-filter');
  const productCards = document.querySelectorAll('.product-card');
  
  categoryFilters.forEach(filter => {
      filter.addEventListener('click', function() {
          const category = this.dataset.category;
          
          // Update active state
          categoryFilters.forEach(f => f.classList.remove('active'));
          this.classList.add('active');
          
          // Filter products
          productCards.forEach(card => {
              if (category === 'all' || card.dataset.category === category) {
                  card.style.display = 'block';
                  card.style.animation = 'fadeInUp 0.6s ease-out forwards';
              } else {
                  card.style.display = 'none';
              }
          });
      });
  });
  
  // Category card click functionality
  const categoryCards = document.querySelectorAll('.category-card');
  
  categoryCards.forEach(card => {
      card.addEventListener('click', function() {
          const category = this.dataset.category;
          
          // Find and click the corresponding filter button
          const filterButton = document.querySelector(`.category-filter[data-category="${category}"]`);
          if (filterButton) {
              filterButton.click();
              
              // Scroll to products section
              document.getElementById('products').scrollIntoView({
                  behavior: 'smooth'
              });
          }
      });
  });
});
</script>

@endsection
