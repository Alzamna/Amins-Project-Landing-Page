@extends('admin.layouts.app')

@section('title', 'View Blog Post')
@section('page-title', 'View Blog Post')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header Actions -->
    <div class="flex justify-between items-center mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.blog-posts.index') }}" 
               class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Posts
            </a>
            
            @if($blogPost->is_published)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                    <div class="w-2 h-2 bg-green-400 rounded-full mr-2"></div>
                    Published
                </span>
            @else
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                    <div class="w-2 h-2 bg-yellow-400 rounded-full mr-2"></div>
                    Draft
                </span>
            @endif

            @if($blogPost->is_featured)
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-orange-100 text-orange-800">
                    <i class="fas fa-star mr-1"></i>
                    Featured
                </span>
            @endif
        </div>

        <div class="flex space-x-3">
            <a href="{{ route('admin.blog-posts.edit', $blogPost) }}" 
               class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                </svg>
                Edit Post
            </a>
            
            <form method="POST" action="{{ route('admin.blog-posts.destroy', $blogPost) }}" class="inline"
                  onsubmit="return confirm('Are you sure you want to delete this blog post?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                    </svg>
                    Delete
                </button>
            </form>
        </div>
    </div>

    <!-- Blog Post Content -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Featured Image -->
        @if($blogPost->featured_image)
            <div class="relative h-96 overflow-hidden">
                <img src="{{ $blogPost->featured_image_url }}" 
                     alt="{{ $blogPost->title }}" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                
                <!-- Category Badge -->
                <div class="absolute top-6 left-6">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $blogPost->category_color }} text-white">
                        {{ $blogPost->category }}
                    </span>
                </div>
                
                <!-- Title Overlay -->
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h1 class="text-4xl font-bold text-white leading-tight mb-4">
                        {{ $blogPost->title }}
                    </h1>
                </div>
            </div>
        @else
            <div class="p-8 border-b border-gray-200">
                <div class="mb-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $blogPost->category_color }} text-white">
                        {{ $blogPost->category }}
                    </span>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 leading-tight">
                    {{ $blogPost->title }}
                </h1>
            </div>
        @endif

        <!-- Meta Information -->
        <div class="px-8 py-6 bg-gray-50 border-b border-gray-200">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center space-x-6 text-sm text-gray-600">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                        <span>{{ $blogPost->author }}</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ $blogPost->formatted_date }}</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span>{{ $blogPost->reading_time }} min read</span>
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-sm text-gray-600">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                        <span>{{ $blogPost->views_count }} views</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21.99 4c0-1.1-.89-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                        </svg>
                        <span>{{ $blogPost->comments_count }} comments</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Excerpt -->
        <div class="px-8 py-6 bg-blue-50 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Ringkasan</h3>
            <p class="text-gray-700 leading-relaxed text-lg">
                {!! $blogPost->excerpt !!}
            </p>
        </div>

        <!-- Content -->
        <div class="px-8 py-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Konten</h3>
            <div class="prose prose-lg max-w-none">
                {!! $blogPost->content !!}
            </div>
        </div>

        <!-- SEO Information -->
        <div class="px-8 py-6 bg-gray-50 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi SEO</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                    <div class="bg-white px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-600">
                        {{ $blogPost->slug }}
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Pratinjau URL</label>
                    <div class="bg-white px-3 py-2 border border-gray-300 rounded-lg text-sm text-blue-600">
                        {{ url('/blog/' . $blogPost->slug) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
