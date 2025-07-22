@extends('admin.layouts.app')

@section('title', 'Produk')

@section('content')
<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Produk</h1>
                    <p class="mt-2 text-sm text-gray-600">Kelola daftar produk dan inventaris Anda</p>
                </div>
                <div class="mt-4 sm:mt-0">
                    <a href="{{ route('admin.products.create') }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow-sm transition-colors duration-200">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Tambah Produk Baru
                    </a>
                </div>
            </div>
        </div>

        <!-- Success Alert -->
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 rounded-lg p-4">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                    <button type="button" class="ml-auto text-green-400 hover:text-green-600" onclick="this.parentElement.parentElement.remove()">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <!-- Products Table Card -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($products as $product)
                            <tr class="hover:bg-gray-50 transition-colors duration-150">
                                <!-- Product Info -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-16 h-16">
                                            @if($product->main_image)
                                                <img src="{{ Storage::url($product->main_image) }}"
                                                     alt="{{ $product->name }}"
                                                    class="w-16 h-16 rounded-lg object-cover border border-gray-200">
                                            @else
                                                <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center border border-gray-200">
                                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-semibold text-gray-900">{{ $product->name }}</div>
                                            @if($product->sku)
                                                <div class="text-sm text-gray-500">SKU: {{ $product->sku }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <!-- Categories -->
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach($product->categories as $category)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium text-white"
                                                  style="background-color: {{ $category->color }};">
                                                @if($category->icon)
                                                    <i class="{{ $category->icon }} mr-1"></i>
                                                @endif
                                                {{ $category->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                </td>
                                <!-- Price -->
                                <td class="px-6 py-4">
                                    @if($product->sale_price)
                                        <div class="text-sm font-semibold text-green-600">{{ $product->formatted_sale_price }}</div>
                                        <div class="text-sm text-gray-500 line-through">{{ $product->formatted_price }}</div>
                                    @else
                                        <div class="text-sm font-semibold text-gray-900">{{ $product->formatted_price }}</div>
                                    @endif
                                </td>
                                <!-- Stock -->
                                <td class="px-6 py-4">
                                    <div class="flex flex-col">
                                        @php
                                            $stockColors = [
                                                'in_stock' => 'bg-green-100 text-green-800',
                                                'out_of_stock' => 'bg-red-100 text-red-800',
                                                'low_stock' => 'bg-yellow-100 text-yellow-800'
                                            ];
                                        @endphp
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $stockColors[$product->stock_status] ?? 'bg-gray-100 text-gray-800' }}">
                                            {{ ucfirst(str_replace('_', ' ', $product->stock_status)) }}
                                        </span>
                                        @if($product->stock_quantity)
                                            <span class="text-xs text-gray-500 mt-1">Qty: {{ $product->stock_quantity }}</span>
                                        @endif
                                    </div>
                                </td>
                                <!-- Status -->
                                <td class="px-6 py-4">
                                    <div class="flex flex-col space-y-1">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $product->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ $product->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                        </span>
                                        @if($product->is_featured)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                Diperjualbelikan
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <!-- Actions -->
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end space-x-2">
                                        <a href="{{ route('admin.products.show', $product) }}"
                                           class="inline-flex items-center p-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 rounded-lg transition-colors duration-150"
                                           title="Lihat">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.products.edit', $product) }}"
                                           class="inline-flex items-center p-2 text-yellow-600 hover:text-yellow-800 hover:bg-yellow-50 rounded-lg transition-colors duration-150"
                                           title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product) }}"
                                              method="POST"
                                               class="inline-block"
                                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                     class="inline-flex items-center p-2 text-red-600 hover:text-red-800 hover:bg-red-50 rounded-lg transition-colors duration-150"
                                                    title="Hapus">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-16 text-center">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">Produk tidak ditemukan</h3>
                                        <p class="text-gray-500 mb-6">Mulai dengan membuat produk pertama Anda untuk mengelola inventaris.</p>
                                        <a href="{{ route('admin.products.create') }}"
                                            class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg shadow-sm transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            Tambah Produk Baru
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            @if($products->hasPages())
                <div class="bg-white px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-center">
                        {{ $products->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<style>
/* Custom pagination styles for Tailwind */
.pagination {
    @apply flex items-center space-x-1;
}

.pagination .page-link {
    @apply px-3 py-2 text-sm text-gray-500 hover:text-gray-700 hover:bg-gray-50 border border-gray-300 rounded-md transition-colors duration-150;
}

.pagination .page-item.active .page-link {
    @apply bg-blue-600 text-white border-blue-600;
}

.pagination .page-item.disabled .page-link {
    @apply text-gray-300 cursor-not-allowed;
}
</style>
@endsection
