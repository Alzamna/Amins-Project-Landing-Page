@extends('admin.layouts.app')

@section('title', 'Product Details')
@section('page-title', 'Product Details')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Header -->
        <div class="p-6 border-b">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">{{ $product->name }}</h2>
                    <p class="text-gray-600 mt-1">SKU: {{ $product->sku }}</p>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </a>
                    <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="inline" 
                          onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-trash mr-2"></i>
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 p-6">
            <!-- Product Images -->
            <div>
                @if($product->main_image)
                    <img src="{{ Storage::url($product->main_image) }}" alt="{{ $product->name }}" class="w-full h-96 object-cover rounded-lg mb-4">
                @else
                    <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-image text-gray-400 text-6xl"></i>
                    </div>
                @endif

                <!-- Additional Images -->
                @if($product->images && count($product->images) > 0)
                    <div class="grid grid-cols-4 gap-2">
                        @foreach($product->images as $image)
                            <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}" class="w-full h-20 object-cover rounded border">
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <!-- Categories -->
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Categories</h3>
                    <div class="mt-1 flex flex-wrap gap-2">
                        @foreach($product->categories as $category)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white" 
                                  style="background-color: {{ $category->color }};">
                                @if($category->icon)
                                    <i class="{{ $category->icon }} mr-2"></i>
                                @endif
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <!-- Price -->
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Price</h3>
                    <div class="mt-1">
                        @if($product->sale_price)
                            <span class="text-2xl font-bold text-green-600">{{ $product->formatted_sale_price }}</span>
                            <span class="text-lg text-gray-500 line-through ml-2">{{ $product->formatted_price }}</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 ml-2">
                                -{{ $product->discount_percentage }}%
                            </span>
                        @else
                            <span class="text-2xl font-bold text-gray-900">{{ $product->formatted_price }}</span>
                        @endif
                    </div>
                </div>

                <!-- Stock -->
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Stock</h3>
                    <div class="mt-1 flex items-center space-x-4">
                        <span class="text-lg font-semibold">{{ $product->stock_quantity }} units</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium 
                                   {{ $product->stock_status === 'in_stock' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ ucfirst(str_replace('_', ' ', $product->stock_status)) }}
                        </span>
                    </div>
                </div>

                <!-- Status -->
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Status</h3>
                    <div class="mt-1 flex space-x-2">
                        @if($product->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Inactive
                            </span>
                        @endif
                        
                        @if($product->is_featured)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Featured
                            </span>
                        @endif
                    </div>
                </div>

                <!-- SEO Fields -->
                @if($product->meta_title || $product->meta_description)
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">SEO</h3>
                        <div class="mt-1 space-y-1">
                            @if($product->meta_title)
                                <p class="text-sm text-gray-700"><strong>Title:</strong> {{ $product->meta_title }}</p>
                            @endif
                            @if($product->meta_description)
                                <p class="text-sm text-gray-700"><strong>Description:</strong> {{ $product->meta_description }}</p>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Dimensions & Weight -->
                @if($product->weight || $product->dimensions)
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Physical Details</h3>
                        <div class="mt-1 space-y-1">
                            @if($product->weight)
                                <p class="text-sm text-gray-700">Weight: {{ $product->weight }} kg</p>
                            @endif
                            @if($product->dimensions)
                                <p class="text-sm text-gray-700">Dimensions: {{ $product->dimensions }}</p>
                            @endif
                        </div>
                    </div>
                @endif

                <!-- Timestamps -->
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide">Timestamps</h3>
                    <div class="mt-1 space-y-1">
                        <p class="text-sm text-gray-700">Created: {{ $product->created_at->format('M d, Y H:i') }}</p>
                        <p class="text-sm text-gray-700">Updated: {{ $product->updated_at->format('M d, Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Descriptions -->
        <div class="border-t p-6 space-y-6">
            @if($product->short_description)
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Short Description</h3>
                    <p class="text-gray-700">{{ $product->short_description }}</p>
                </div>
            @endif

            <div>
                <h3 class="text-lg font-medium text-gray-900 mb-3">Description</h3>
                <div class="text-gray-700 whitespace-pre-line">{{ $product->description }}</div>
            </div>

            <!-- Specifications -->
            @if($product->specifications && is_array($product->specifications) && count($product->specifications) > 0)
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-3">Specifications</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($product->specifications as $key => $value)
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-700">{{ ucfirst($key) }}:</span>
                                <span class="text-gray-600">{{ $value }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <!-- Actions -->
        <div class="border-t p-6">
            <div class="flex justify-between">
                <a href="{{ route('admin.products.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-6 py-2 rounded-lg">
                    ← Back to Products
                </a>
                <div class="space-x-2">
                    <a href="{{ route('admin.products.edit', $product) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                        Edit Product
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
