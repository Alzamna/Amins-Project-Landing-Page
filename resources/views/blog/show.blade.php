@extends('layouts.app')

@section('title', $blogPost->title)

@section('content')
<article class="py-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Back Button -->
        <div class="mb-8">
            <a href="{{ route('blog') }}" 
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Kembali ke Blog
            </a>
        </div>

        <!-- Article Header -->
        <header class="mb-12">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Category Badge -->
                <div class="mb-6">
                    <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium {{ $blogPost->category_color }} text-white">
                        {{ $blogPost->category }}
                    </span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    {{ $blogPost->title }}
                </h1>

                <!-- Excerpt -->
                <p class="text-xl text-gray-600 leading-relaxed mb-8 max-w-3xl mx-auto">
                    {{ $blogPost->excerpt }}
                </p>

                <!-- Meta Information -->
                <div class="flex flex-wrap items-center justify-center gap-6 text-gray-500 mb-8">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                        <span class="font-medium">{{ $blogPost->author }}</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>{{ $blogPost->formatted_date }}</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <span>{{ $blogPost->reading_time }} menit baca</span>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <span>{{ $blogPost->views_count }} views</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Featured Image -->
        @if($blogPost->featured_image)
        <div class="mb-12">
            <div class="max-w-5xl mx-auto">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ $blogPost->featured_image_url }}" 
                         alt="{{ $blogPost->title }}" 
                         class="w-full h-96 lg:h-[500px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                </div>
            </div>
        </div>
        @endif

        <!-- Article Content -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="p-8 lg:p-12">
                    <!-- Article Body -->
                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-800 leading-relaxed">
                            {!! nl2br(e($blogPost->content)) !!}
                        </div>
                    </div>

                    <!-- Article Footer -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <!-- Tags/Category -->
                        <div class="flex flex-wrap items-center gap-4 mb-8">
                            <span class="text-gray-600 font-medium">Kategori:</span>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $blogPost->category_color }} text-white">
                                {{ $blogPost->category }}
                            </span>
                        </div>

                        <!-- Share Buttons -->
                        <div class="flex flex-wrap items-center gap-4">
                            <span class="text-gray-600 font-medium">Bagikan:</span>
                            
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Facebook
                            </a>
                            
                            <!-- Twitter -->
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($blogPost->title) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-sky-500 hover:bg-sky-600 text-white rounded-lg transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                                Twitter
                            </a>
                            
                            <!-- WhatsApp -->
                            <a href="https://wa.me/?text={{ urlencode($blogPost->title . ' - ' . request()->fullUrl()) }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Posts -->
        @if(isset($relatedPosts) && $relatedPosts->count() > 0)
        <section class="mt-16">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Artikel Terkait</h2>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedPosts as $relatedPost)
                    <article class="group cursor-pointer">
                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="block">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                                <div class="relative overflow-hidden h-48">
                                    <img src="{{ $relatedPost->featured_image_url }}" 
                                         alt="{{ $relatedPost->title }}" 
                                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    
                                    <!-- Category Badge -->
                                    <div class="absolute top-4 left-4 {{ $relatedPost->category_color }} text-white px-3 py-1 rounded-full text-xs font-medium">
                                        {{ $relatedPost->category }}
                                    </div>
                                </div>
                                
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300 line-clamp-2">
                                        {{ $relatedPost->title }}
                                    </h3>
                                    
                                    <p class="text-gray-600 leading-relaxed mb-4 line-clamp-3">
                                        {{ $relatedPost->excerpt_limited }}
                                    </p>
                                    
                                    <div class="flex items-center justify-between text-sm text-gray-500">
                                        <span>{{ $relatedPost->formatted_date }}</span>
                                        <span>{{ $relatedPost->reading_time }} min</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
    </div>
</article>
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .prose {
        color: #374151;
        line-height: 1.75;
    }
    
    .prose p {
        margin-bottom: 1.25em;
    }
    
    .prose h2 {
        font-size: 1.5em;
        font-weight: 700;
        margin-top: 2em;
        margin-bottom: 1em;
        color: #1f2937;
    }
    
    .prose h3 {
        font-size: 1.25em;
        font-weight: 600;
        margin-top: 1.6em;
        margin-bottom: 0.6em;
        color: #1f2937;
    }
    
    .prose ul, .prose ol {
        margin: 1.25em 0;
        padding-left: 1.625em;
    }
    
    .prose li {
        margin: 0.5em 0;
    }
    
    .prose blockquote {
        border-left: 4px solid #e5e7eb;
        padding-left: 1em;
        margin: 1.6em 0;
        font-style: italic;
        color: #6b7280;
    }
</style>
@endpush
