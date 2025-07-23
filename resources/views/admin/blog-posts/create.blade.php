@extends('admin.layouts.app')

@section('title', 'Create Blog Post')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Create New Blog Post</h1>
                <p class="text-gray-600 mt-2">Write and publish a new blog article</p>
            </div>
            <a href="{{ route('admin.blog-posts.index') }}" 
               class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                Back to Posts
            </a>
        </div>

        <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul *</label>
                            <input type="text" 
                                   id="title" 
                                   name="title" 
                                   value="{{ old('title') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                                   placeholder="Masukkan judul blog"
                                   required>
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Excerpt (Section) -->
                        <div class="bg-white rounded-lg p-4 mb-2">
                            <label for="excerpt" class="block text-base font-semibold text-gray-800 mb-2">Ringkasan *</label>
                            <div id="excerpt-editor" style="min-height:100px;">{{ old('excerpt') }}</div>
                            <textarea name="excerpt" id="excerpt" class="hidden">{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Content (Section) -->
                        <div class="bg-white rounded-lg p-4">
                            <label for="content" class="block text-base font-semibold text-gray-800 mb-2">Konten *</label>
                            <div id="content-editor" style="min-height:200px;">{{ old('content') }}</div>
                            <textarea name="content" id="content" class="hidden">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Featured Image -->
                        <div>
                            <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                            <input type="file" 
                                   id="featured_image" 
                                   name="featured_image"
                                   accept="image/*"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('featured_image') border-red-500 @enderror">
                            @error('featured_image')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category *</label>
                            <select id="category" 
                                    name="category"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category') border-red-500 @enderror"
                                    required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category }}" {{ old('category') == $category ? 'selected' : '' }}>
                                        {{ $category }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Author -->
                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-700 mb-2">Author *</label>
                            <input type="text" 
                                   id="author" 
                                   name="author" 
                                   value="{{ old('author', 'Admin') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('author') border-red-500 @enderror"
                                   required>
                            @error('author')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Reading Time -->
                        <div>
                            <label for="reading_time" class="block text-sm font-medium text-gray-700 mb-2">Reading Time (minutes) *</label>
                            <input type="number" 
                                   id="reading_time" 
                                   name="reading_time" 
                                   value="{{ old('reading_time', 5) }}"
                                   min="1" 
                                   max="60"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('reading_time') border-red-500 @enderror"
                                   required>
                            @error('reading_time')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Options -->
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="checkbox" 
                                       id="is_featured" 
                                       name="is_featured" 
                                       value="1"
                                       {{ old('is_featured') ? 'checked' : '' }}
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="is_featured" class="ml-2 block text-sm text-gray-700">
                                    Featured Post
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input type="checkbox" 
                                       id="is_published" 
                                       name="is_published" 
                                       value="1"
                                       {{ old('is_published', true) ? 'checked' : '' }}
                                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="is_published" class="ml-2 block text-sm text-gray-700">
                                    Publish Immediately
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO</h3>
                    <div class="space-y-6">
                        <div>
                            <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Judul SEO</label>
                            <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
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
                                placeholder="Deskripsi SEO untuk mesin pencari">{{ old('meta_description') }}</textarea>
                            @error('meta_description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">Disarankan: 150-160 karakter</p>
                        </div>
                    </div>
                </div>

                <!-- Submit Buttons -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.blog-posts.index') }}" 
                       class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors duration-200">
                        Cancel
                    </a>
                    <button type="submit" 
                            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition-colors duration-200">
                        Create Blog Post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var excerptQuill = new Quill('#excerpt-editor', { theme: 'snow' });
            var contentQuill = new Quill('#content-editor', { theme: 'snow' });

            // Set initial value from textarea (for edit form)
            var excerptTextarea = document.getElementById('excerpt');
            var contentTextarea = document.getElementById('content');
            if (excerptTextarea && excerptTextarea.value) {
                excerptQuill.root.innerHTML = excerptTextarea.value;
            }
            if (contentTextarea && contentTextarea.value) {
                contentQuill.root.innerHTML = contentTextarea.value;
            }

            // On submit, update textarea with Quill HTML
            var form = excerptTextarea.closest('form');
            form.addEventListener('submit', function() {
                excerptTextarea.value = excerptQuill.root.innerHTML;
                contentTextarea.value = contentQuill.root.innerHTML;
            });
        });
    </script>
@endpush
