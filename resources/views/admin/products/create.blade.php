@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Create New Product</h1>
                    <p class="mt-2 text-sm text-gray-600">Add a new product to your inventory</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <a href="{{ route('admin.products.index') }}" 
                       class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white text-sm font-medium rounded-lg shadow-sm transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali ke Products
                    </a>
                </div>
            </div>
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Main Content -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Basic Information -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Informasi Dasar</h3>
                        </div>
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Product Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('name') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                       placeholder="Enter product name">
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                                <input type="text" 
                                       id="slug" 
                                       name="slug" 
                                       value="{{ old('slug') }}"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('slug') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                       placeholder="Auto-generated from product name">
                                @error('slug')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">Leave empty to auto-generate from product name</p>
                            </div>

                            <div>
                                <label for="short_description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
                                <textarea id="short_description" 
                                          name="short_description" 
                                          rows="3"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('short_description') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                          placeholder="Deskripsi singkat produk">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                                <div id="description-editor" style="min-height:150px;">{{ old('description') }}</div>
                                <textarea name="description" id="description" class="hidden">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Harga</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga Normal <span class="text-red-500">*</span></label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">Rp</span>
                                        <input type="number" 
                                               step="0.01" 
                                               id="price" 
                                               name="price" 
                                               value="{{ old('price') }}" 
                                               required
                                               class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('price') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                               placeholder="0.00">
                                    </div>
                                    @error('price')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="sale_price" class="block text-sm font-medium text-gray-700 mb-2">Harga Diskon</label>
                                    <div class="relative">
                                        <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">Rp</span>
                                        <input type="number" 
                                               step="0.01" 
                                               id="sale_price" 
                                               name="sale_price" 
                                               value="{{ old('sale_price') }}"
                                               class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('sale_price') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                               placeholder="0.00">
                                    </div>
                                    @error('sale_price')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                    <p class="mt-1 text-sm text-gray-500">Biarkan kosong jika tidak ada harga diskon</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Inventory -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Stok</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="sku" class="block text-sm font-medium text-gray-700 mb-2">SKU</label>
                                    <input type="text" 
                                           id="sku" 
                                           name="sku" 
                                           value="{{ old('sku') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('sku') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                           placeholder="Product SKU">
                                    @error('sku')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="stock_quantity" class="block text-sm font-medium text-gray-700 mb-2">Jumlah Stok</label>
                                    <input type="number" 
                                           id="stock_quantity" 
                                           name="stock_quantity" 
                                           value="{{ old('stock_quantity') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('stock_quantity') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                           placeholder="0">
                                    @error('stock_quantity')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="stock_status" class="block text-sm font-medium text-gray-700 mb-2">Status Stok <span class="text-red-500">*</span></label>
                                    <select id="stock_status" 
                                            name="stock_status" 
                                            required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('stock_status') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror">
                                        <option value="in_stock" {{ old('stock_status', 'in_stock') == 'in_stock' ? 'selected' : '' }}>Tersedia</option>
                                        <option value="out_of_stock" {{ old('stock_status') == 'out_of_stock' ? 'selected' : '' }}>Habis</option>
                                        <option value="on_backorder" {{ old('stock_status') == 'on_backorder' ? 'selected' : '' }}>Pre-Order</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Pengiriman</h3>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="weight" class="block text-sm font-medium text-gray-700 mb-2">Berat (kg)</label>
                                    <input type="number" 
                                           step="0.01" 
                                           id="weight" 
                                           name="weight" 
                                           value="{{ old('weight') }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('weight') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                           placeholder="0.00">
                                    @error('weight')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="dimensions" class="block text-sm font-medium text-gray-700 mb-2">Dimensi (P x L x T)</label>
                                    <input type="text" 
                                           id="dimensions" 
                                           name="dimensions" 
                                           value="{{ old('dimensions') }}"
                                           placeholder="cth: 10 x 5 x 3 cm"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('dimensions') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror">
                                    @error('dimensions')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SEO -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">SEO</h3>
                        </div>
                        <div class="p-6 space-y-6">
                            <div>
                                <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Judul SEO</label>
                                <input type="text" 
                                       id="meta_title" 
                                       name="meta_title" 
                                       value="{{ old('meta_title') }}"
                                       maxlength="60"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('meta_title') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                       placeholder="Judul SEO untuk mesin pencari">
                                @error('meta_title')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">Disarankan: 50-60 karakter</p>
                            </div>

                            <div>
                                <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi SEO</label>
                                <textarea id="meta_description" 
                                          name="meta_description" 
                                          rows="3"
                                          maxlength="160"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('meta_description') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                          placeholder="Deskripsi SEO untuk mesin pencari">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                <p class="mt-1 text-sm text-gray-500">Disarankan: 150-160 karakter</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Sidebar -->
                <div class="space-y-8">
                    <!-- Product Status -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Status Produk</h3>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <label for="is_active" class="text-sm font-medium text-gray-700">Aktif</label>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" 
                                           id="is_active" 
                                           name="is_active" 
                                           value="1" 
                                           {{ old('is_active', true) ? 'checked' : '' }}
                                           class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>

                            <div class="flex items-center justify-between">
                                <label for="is_featured" class="text-sm font-medium text-gray-700">Unggulan</label>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" 
                                           id="is_featured" 
                                           name="is_featured" 
                                           value="1" 
                                           {{ old('is_featured') ? 'checked' : '' }}
                                           class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-yellow-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-yellow-500"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Kategori <span class="text-red-500">*</span>
                            </h3>
                        </div>
                        <div class="p-6">
                            @error('categories')
                                <div class="mb-4 bg-red-50 border border-red-200 rounded-lg p-4">
                                    <p class="text-red-800 text-sm">{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="space-y-3 max-h-64 overflow-y-auto">
                                @foreach($categories as $category)
                                    <label class="flex items-center p-3 rounded-lg hover:bg-gray-50 cursor-pointer transition-colors duration-150">
                                        <input type="checkbox" 
                                               name="categories[]"
                                               value="{{ $category->id }}"
                                               {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                                               class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                                        <div class="ml-3 flex items-center">
                                            @if($category->color)
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium text-white mr-2"
                                                      style="background-color: {{ $category->color }};">
                                                    @if($category->icon)
                                                        <i class="{{ $category->icon }} mr-1"></i>
                                                    @endif
                                                </span>
                                            @endif
                                            <span class="text-sm font-medium text-gray-700">{{ $category->name }}</span>
                                        </div>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Main Image -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Gambar Utama</h3>
                        </div>
                        <div class="p-6">
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Unggah Gambar</label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 transition-colors duration-200">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                <span>Upload a file</span>
                                                <input id="image" name="image" type="file" accept="image/*" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF maksimal 10MB</p>
                                    </div>
                                </div>
                                @error('image')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="image-preview" class="mt-4 hidden">
                                <img id="preview-img" src="/placeholder.svg" alt="Preview" class="w-full h-48 object-cover rounded-lg border border-gray-200">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Images -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold text-gray-900">Gambar Tambahan</h3>
                        </div>
                        <div class="p-6">
                            <div>
                                <label for="additional_images" class="block text-sm font-medium text-gray-700 mb-2">Unggah Gambar Tambahan</label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 transition-colors duration-200">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="additional_images" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                                <span>Upload files</span>
                                                <input id="additional_images" name="additional_images[]" type="file" accept="image/*" multiple class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">Bisa memilih beberapa gambar sekaligus.</p>
                                    </div>
                                </div>
                                @error('additional_images.*')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div id="additional-images-preview" class="mt-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="mt-8 flex flex-col sm:flex-row sm:justify-end sm:space-x-4 space-y-3 sm:space-y-0">
                <a href="{{ route('admin.products.index') }}" 
                   class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Cancel
                </a>
                <button type="submit" 
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-generate slug from name
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');
    
    nameInput.addEventListener('input', function() {
        if (!slugInput.value || slugInput.dataset.userModified !== 'true') {
            slugInput.value = slugify(this.value);
        }
    });
    
    // Track if user manually modified slug
    slugInput.addEventListener('input', function() {
        slugInput.dataset.userModified = 'true';
    });
    
    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }
    
    // Main image preview
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    
    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                imagePreview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        } else {
            imagePreview.classList.add('hidden');
        }
    });
    
    // Additional images preview
    const additionalImagesInput = document.getElementById('additional_images');
    const additionalImagesPreview = document.getElementById('additional-images-preview');
    
    additionalImagesInput.addEventListener('change', function(e) {
        additionalImagesPreview.innerHTML = '';
        
        if (e.target.files.length > 0) {
            const previewContainer = document.createElement('div');
            previewContainer.className = 'grid grid-cols-2 gap-3';
            
            Array.from(e.target.files).forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-24 object-cover rounded-lg border border-gray-200';
                        img.alt = `Preview ${index + 1}`;
                        
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
            
            additionalImagesPreview.appendChild(previewContainer);
        }
    });
});
</script>
@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        var descriptionQuill = new Quill('#description-editor', { theme: 'snow' });
        descriptionQuill.root.innerHTML = document.getElementById('description').value;
        document.getElementById('description-editor').closest('form').addEventListener('submit', function() {
            document.getElementById('description').value = descriptionQuill.root.innerHTML;
        });
    </script>
@endpush
@endsection
