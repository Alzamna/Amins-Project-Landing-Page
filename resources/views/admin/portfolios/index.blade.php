@extends('admin.layouts.app')

@section('title', 'Kelola Portfolio')

@section('page-title', 'Portfolio Management')

@section('content')
<div class="space-y-6">
    <!-- Header Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Portfolio Management</h1>
                <p class="text-gray-600 mt-1">Kelola semua portfolio proyek Anda</p>
            </div>
            <a href="{{ route('admin.portfolios.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 shadow-sm">
                <i class="fas fa-plus mr-2"></i>
                Tambah Portfolio
            </a>
        </div>
    </div>


    <!-- Success Alert -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg flex items-center">
            <i class="fas fa-check-circle mr-2 text-green-600"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <!-- Portfolio Table -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Daftar Portfolio</h2>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Gambar
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Judul
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Kategori
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Featured
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($portfolios as $portfolio)
                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                #{{ $portfolio->id }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($portfolio->image)
                                    <div class="flex-shrink-0 h-16 w-16">
                                        <img class="h-16 w-16 rounded-lg object-cover shadow-sm border border-gray-200" 
                                             src="{{ asset('storage/' . $portfolio->image) }}" 
                                             alt="{{ $portfolio->title }}">
                                    </div>
                                @else
                                    <div class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-lg flex items-center justify-center border border-gray-200">
                                        <i class="fas fa-image text-gray-400 text-xl"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900 max-w-xs truncate">
                                    {{ $portfolio->title }}
                                </div>
                                @if($portfolio->description)
                                    <div class="text-sm text-gray-500 max-w-xs truncate">
                                        {{ Str::limit(strip_tags($portfolio->description), 50) }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    {{ $portfolio->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($portfolio->status === 'published')
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <span class="w-1.5 h-1.5 bg-green-400 rounded-full mr-1.5"></span>
                                        Published
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <span class="w-1.5 h-1.5 bg-yellow-400 rounded-full mr-1.5"></span>
                                        Draft
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($portfolio->featured)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                        <i class="fas fa-star mr-1"></i>
                                        Featured
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        Regular
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $portfolio->created_at->format('d/m/Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('admin.portfolios.edit', $portfolio) }}" 
                                       class="inline-flex items-center px-3 py-1.5 bg-yellow-100 hover:bg-yellow-200 text-yellow-800 text-xs font-medium rounded-md transition-colors">
                                        <i class="fas fa-edit mr-1"></i>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" 
                                          method="POST" 
                                          class="inline"
                                          onsubmit="return confirm('Yakin ingin menghapus portfolio ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="inline-flex items-center px-3 py-1.5 bg-red-100 hover:bg-red-200 text-red-800 text-xs font-medium rounded-md transition-colors">
                                            <i class="fas fa-trash mr-1"></i>
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-12 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-folder-open text-gray-300 text-4xl mb-4"></i>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada portfolio</h3>
                                    <p class="text-gray-500 mb-4">Mulai dengan menambahkan portfolio pertama Anda</p>
                                    <a href="{{ route('admin.portfolios.create') }}" 
                                       class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>
                                        Tambah Portfolio
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($portfolios->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Menampilkan {{ $portfolios->firstItem() }} sampai {{ $portfolios->lastItem() }} 
                        dari {{ $portfolios->total() }} portfolio
                    </div>
                    <div class="flex items-center space-x-2">
                        {{-- Previous Page Link --}}
                        @if ($portfolios->onFirstPage())
                            <span class="px-3 py-2 text-sm text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $portfolios->previousPageUrl() }}" 
                               class="px-3 py-2 text-sm text-gray-600 bg-white hover:bg-gray-50 border border-gray-300 rounded-md transition-colors duration-200">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                            @if ($page == $portfolios->currentPage())
                                <span class="px-3 py-2 text-sm text-white bg-blue-600 rounded-md">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" 
                                   class="px-3 py-2 text-sm text-gray-600 bg-white hover:bg-gray-50 border border-gray-300 rounded-md transition-colors duration-200">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($portfolios->hasMorePages())
                            <a href="{{ $portfolios->nextPageUrl() }}" 
                               class="px-3 py-2 text-sm text-gray-600 bg-white hover:bg-gray-50 border border-gray-300 rounded-md transition-colors duration-200">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <span class="px-3 py-2 text-sm text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>

    
    </div>
</div>
@endsection