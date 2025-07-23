@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')
@section('page-title', 'Edit Blog Post')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center justify-between mb-8">
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.blog-posts.index') }}" 
               class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Posts
            </a>
            
            <a href="{{ route('admin.blog-posts.show', $blogPost) }}" 
               class="inline-flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                </svg>
                View Post
            </a>
        </div>

        <div class="text-sm text-gray-500">
            Last updated: {{ $blogPost->updated_at->format('M j, Y \a\t g:i A') }}
        </div>
    </div>

    <!-- Form -->
    <form id="blog-edit-form" method="POST" action="{{ route('admin.blog-posts.update', $blogPost) }}" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Basic Information -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Basic Information</h3>
            
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Title -->
                <div class="md:col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul *</label>
                    <input type="text" 
                           id="title" 
                           name="title" 
                           value="{{ old('title', $blogPost->title) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('title') border-red-500 @enderror"
                           placeholder="Masukkan judul blog" required>
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                        Category <span class="text-red-500">*</span>
                    </label>
                    <select id="category" 
                            name="category" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('category') border-red-500 @enderror">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ old('category', $blogPost->category) == $category ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Author -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700 mb-2">
                        Author <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="author" 
                           name="author" 
                           value="{{ old('author', $blogPost->author) }}"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('author') border-red-500 @enderror"
                           placeholder="Author name">
                    @error('author')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Reading Time -->
                <div>
                    <label for="reading_time" class="block text-sm font-medium text-gray-700 mb-2">
                        Reading Time (minutes) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                           id="reading_time" 
                           name="reading_time" 
                           value="{{ old('reading_time', $blogPost->reading_time) }}"
                           min="1" 
                           max="60"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 @error('reading_time') border-red-500 @enderror"
                           placeholder="5">
                    @error('reading_time')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="md:col-span-2 space-y-8">
            <!-- Excerpt (Section) -->
            <div class="bg-white rounded-lg p-4 mb-2">
                <label for="excerpt" class="block text-base font-semibold text-gray-800 mb-2">Ringkasan *</label>
                <div id="excerpt-editor" style="min-height:100px;">{!! old('excerpt', $blogPost->excerpt) !!}</div>
                <textarea name="excerpt" id="excerpt" class="hidden">{!! old('excerpt', $blogPost->excerpt) !!}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Content (Section) -->
            <div class="bg-white rounded-lg p-4">
                <label for="content" class="block text-base font-semibold text-gray-800 mb-2">Konten *</label>
                <div id="content-editor" style="min-height:200px;">{!! old('content', $blogPost->content) !!}</div>
                <textarea name="content" id="content" class="hidden">{!! old('content', $blogPost->content) !!}</textarea>
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Featured Image -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Featured Image</h3>
            
            @if($blogPost->featured_image)
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                    <div class="relative inline-block">
                        <img src="{{ $blogPost->featured_image_url }}" 
                             alt="Current featured image" 
                             class="w-48 h-32 object-cover rounded-lg border border-gray-300">
                    </div>
                </div>
            @endif

            <div>
                <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">
                    {{ $blogPost->featured_image ? 'Replace Image' : 'Featured Image' }}
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-gray-400 transition-colors duration-200">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="featured_image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                <span>Upload a file</span>
                                <input id="featured_image" name="featured_image" type="file" class="sr-only" accept="image/*">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 2MB</p>
                    </div>
                </div>
                @error('featured_image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Settings -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-xl font-semibold text-gray-900 mb-6">Settings</h3>
            
            <div class="space-y-4">
                <!-- Featured Post -->
                <div class="flex items-center">
                    <input id="is_featured" 
                           name="is_featured" 
                           type="checkbox" 
                           value="1"
                           {{ old('is_featured', $blogPost->is_featured) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_featured" class="ml-2 block text-sm text-gray-900">
                        Featured Post
                        <span class="text-gray-500 block text-xs">This post will be highlighted on the blog homepage</span>
                    </label>
                </div>

                <!-- Published -->
                <div class="flex items-center">
                    <input id="is_published" 
                           name="is_published" 
                           type="checkbox" 
                           value="1"
                           {{ old('is_published', $blogPost->is_published) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_published" class="ml-2 block text-sm text-gray-900">
                        Publish Post
                        <span class="text-gray-500 block text-xs">Make this post visible to the public</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- SEO -->
        <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO</h3>
            <div class="space-y-6">
                <div>
                    <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Judul SEO</label>
                    <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $blogPost->meta_title) }}"
                        maxlength="60"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('meta_title') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                        placeholder="Judul SEO untuk mesin pencari">
                    @error('meta_title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-sm text-gray-500">Disarankan: 50-60 karakter</p>
                </div>
                <div>
                    <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi SEO</label>
                    <textarea id="meta_description" name="meta_description" rows="3" maxlength="160"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('meta_description') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                        placeholder="Deskripsi SEO untuk mesin pencari">{{ old('meta_description', $blogPost->meta_description) }}</textarea>
                    @error('meta_description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-sm text-gray-500">Disarankan: 150-160 karakter</p>
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.blog-posts.index') }}" 
               class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200">
                Update Blog Post
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        var excerptQuill = new Quill('#excerpt-editor', { theme: 'snow' });
        var contentQuill = new Quill('#content-editor', { theme: 'snow' });
        // Set initial value from textarea (lebih aman ambil dari textarea.value, bukan innerHTML div)
        excerptQuill.root.innerHTML = document.getElementById('excerpt').value;
        contentQuill.root.innerHTML = document.getElementById('content').value;
        // Pastikan update value textarea pada submit
        document.getElementById('blog-edit-form').addEventListener('submit', function(e) {
            document.getElementById('excerpt').value = excerptQuill.root.innerHTML;
            document.getElementById('content').value = contentQuill.root.innerHTML;
        });
    </script>
@endpush
