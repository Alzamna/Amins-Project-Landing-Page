@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-blue-900 mt-8 mb-8">Blog</h1>

        <!-- Search and Filter Section -->
        <div class="mb-12">
            <div class="flex flex-col lg:flex-row gap-6 items-end justify-end">

                <!-- Simple Category Filter -->
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('blog') }}" 
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ !request('category') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Semua
                    </a>
                    @foreach($categories as $category)
                        <a href="{{ route('blog', ['category' => strtolower($category)]) }}" 
                           class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 {{ request('category') == strtolower($category) ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                            {{ $category }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Featured Article -->
        @if($featuredPost)
        <div class="mb-16">
            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="block">
                <div class="bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 cursor-pointer group">
                    <div class="grid lg:grid-cols-2 gap-0">
                        <!-- Featured Image -->
                        <div class="relative overflow-hidden h-64 lg:h-auto">
                            <img src="{{ $featuredPost->featured_image_url }}" 
                                 alt="{{ $featuredPost->title }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent lg:hidden"></div>
                            
                            <!-- Featured Badge -->
                            <div class="absolute top-6 left-6 bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                FEATURED
                            </div>
                            
                            <!-- Mobile Title Overlay -->
                            <div class="absolute bottom-6 left-6 right-6 lg:hidden">
                                <h2 class="text-white text-xl font-bold leading-tight">
                                    {{ $featuredPost->title }}
                                </h2>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <div class="flex items-center space-x-4 mb-4">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $featuredPost->category_color }} text-white">
                                    {{ $featuredPost->category }}
                                </span>
                                <span class="text-gray-500 text-sm">{{ $featuredPost->formatted_date }}</span>
                            </div>
                            
                            <h2 class="hidden lg:block text-2xl xl:text-3xl font-bold text-blue-900 mb-4 leading-tight group-hover:text-blue-800 transition-colors duration-300">
                                {{ $featuredPost->title }}
                            </h2>
                            
                            <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                                {{ $featuredPost->excerpt_limited }}
                            </p>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4 text-sm text-gray-500">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span>{{ $featuredPost->author }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                                        </svg>
                                        <span>{{ $featuredPost->comments_count }} Comments</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                        <span>{{ $featuredPost->reading_time }} min read</span>
                                    </div>
                                </div>
                                
                                <button class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                    Baca Artikel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif

        <!-- Blog Grid -->
        <div id="blog-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @forelse($posts as $post)
                <article class="blog-card group cursor-pointer" data-category="{{ strtolower($post->category) }}">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                            <div class="relative overflow-hidden">
                                <div class="relative h-64">
                                    <img src="{{ $post->featured_image_url }}" 
                                         alt="{{ $post->title }}" 
                                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                    
                                    <!-- Date Badge -->
                                    <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-2 rounded-lg text-sm font-medium shadow-lg">
                                        <div class="text-center">
                                            <div class="text-lg font-bold">{{ $post->published_at->format('d') }}</div>
                                            <div class="text-xs">{{ $post->published_at->format('M') }}</div>
                                        </div>
                                    </div>
                                    
                                    <!-- Category Badge -->
                                    <div class="absolute top-4 left-4 {{ $post->category_color }} text-white px-3 py-1 rounded-full text-xs font-medium">
                                        {{ $post->category }}
                                    </div>
                                    
                                    <!-- Title Overlay -->
                                    <div class="absolute bottom-0 left-0 right-0 p-6">
                                        <h3 class="text-white text-xl font-bold leading-tight">
                                            {{ $post->title }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6">
                                <div class="flex items-center space-x-4 mb-4 text-sm text-gray-500">
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span>{{ $post->author }}</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                                        </svg>
                                        <span>{{ $post->comments_count }} Comments</span>
                                    </div>
                                    <div class="flex items-center space-x-1">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                        <span>{{ $post->reading_time }} min</span>
                                    </div>
                                </div>
                                
                                <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                    {{ $post->excerpt_limited }}
                                </p>
                                
                            </div>
                        </div>
                    </a>
                </article>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="max-w-md mx-auto">
                        <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Tidak ada artikel ditemukan</h3>
                        <p class="text-gray-500">Coba ubah kata kunci pencarian atau filter kategori</p>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mr-4">
            @if($posts->hasPages())
            <div class="flex justify-center mb-8">
                {{ $posts->links() }}
            </div>
        @endif
        </div>
    </div>
@endsection
