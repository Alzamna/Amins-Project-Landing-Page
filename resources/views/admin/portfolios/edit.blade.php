@extends('admin.layouts.app')

@section('title', 'Edit Portfolio')

@section('page-title', 'Edit Portfolio')

@section('content')
<div class="space-y-6">
    <!-- Header Section -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Edit Portfolio</h1>
                <p class="text-gray-600 mt-1">{{ $portfolio->title }}</p>
            </div>
            <a href="{{ route('admin.portfolios.index') }}" 
               class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>
    </div>

    <!-- Form Section -->
    <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Basic Information -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">Informasi Dasar</h2>
                    
                    <div class="space-y-6">
                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Portfolio <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="title" 
                                   name="title" 
                                   value="{{ old('title', $portfolio->title) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('title') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                   placeholder="Masukkan judul portfolio"
                                   required>
                            @error('title')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Description -->
                        <div class="mb-6">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                            <div id="description-editor" style="min-height:150px;">{!! old('description', $portfolio->description) !!}</div>
                            <textarea name="description" id="description" class="hidden">{!! old('description', $portfolio->description) !!}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Technologies -->
                        <div>
                            <label for="technologies" class="block text-sm font-medium text-gray-700 mb-2">
                                Teknologi yang Digunakan
                            </label>
                            <input type="text" 
                                   id="technologies" 
                                   name="technologies" 
                                   value="{{ old('technologies', is_array($portfolio->technologies) ? implode(', ', $portfolio->technologies) : '') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('technologies') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                   placeholder="Laravel, Vue.js, MySQL, Tailwind CSS">
                            <p class="mt-2 text-sm text-gray-500">Pisahkan dengan koma untuk multiple teknologi</p>
                            @error('technologies')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Project URL -->
                        <div>
                            <label for="project_url" class="block text-sm font-medium text-gray-700 mb-2">
                                URL Proyek
                            </label>
                            <input type="url" 
                                   id="project_url" 
                                   name="project_url" 
                                   value="{{ old('project_url', $portfolio->project_url) }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('project_url') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                   placeholder="https://example.com">
                            @error('project_url')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- SEO -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">SEO</h3>
                    <div class="space-y-6">
                        <div>
                            <label for="meta_title" class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $portfolio->meta_title ?? '') }}"
                                maxlength="60"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('meta_title') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                placeholder="SEO title for search engines">
                            @error('meta_title')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">Recommended: 50-60 karakter</p>
                        </div>
                        <div>
                            <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" rows="3" maxlength="160"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('meta_description') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                placeholder="SEO description for search engines">{{ old('meta_description', $portfolio->meta_description ?? '') }}</textarea>
                            @error('meta_description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-sm text-gray-500">Recommended: 150-160 karakter</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Current Image & Upload -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Gambar Portfolio</h3>
                    
                    <div class="space-y-4">
                        <!-- Current Image -->
                        @if($portfolio->image)
                            <div class="mb-4">
                                <p class="text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini:</p>
                                <img src="{{ asset('storage/' . $portfolio->image) }}" 
                                     alt="{{ $portfolio->title }}" 
                                     class="w-full h-48 object-cover rounded-lg border border-gray-200"
                                     id="current-image">
                            </div>
                        @endif

                        <!-- Upload Area -->
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-400 transition-colors duration-200" id="upload-area">
                            <div id="upload-placeholder">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 mb-2">Klik untuk upload gambar baru</p>
                                <p class="text-sm text-gray-500">PNG, JPG, GIF hingga 2MB</p>
                            </div>
                            <div id="image-preview" class="hidden">
                                <img id="preview-img" class="max-w-full h-48 object-cover rounded-lg mx-auto" alt="Preview">
                                <p class="text-sm text-gray-600 mt-2" id="file-name"></p>
                            </div>
                        </div>
                        
                        <input type="file" 
                               id="image" 
                               name="image" 
                               accept="image/*"
                               class="hidden @error('image') border-red-500 @enderror">
                        
                        <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengubah gambar</p>
                        
                        @error('image')
                            <p class="text-sm text-red-600 flex items-center">
                                <i class="fas fa-exclamation-circle mr-1"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <!-- Settings -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Pengaturan</h3>
                    
                    <div class="space-y-4">
                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <select id="category" 
                                    name="category"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('category') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                    required>
                                <option value="">Pilih Kategori</option>
                                <option value="Web Development" {{ old('category', $portfolio->category) == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="Mobile Application" {{ old('category', $portfolio->category) == 'Mobile Application' ? 'selected' : '' }}>Mobile Application</option>
                                <option value="UI/UX Design" {{ old('category', $portfolio->category) == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                <option value="E-Commerce" {{ old('category', $portfolio->category) == 'E-Commerce' ? 'selected' : '' }}>E-Commerce</option>
                                <option value="System Integration" {{ old('category', $portfolio->category) == 'System Integration' ? 'selected' : '' }}>System Integration</option>
                            </select>
                            @error('category')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                                Status <span class="text-red-500">*</span>
                            </label>
                            <select id="status" 
                                    name="status"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 @error('status') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                    required>
                                <option value="published" {{ old('status', $portfolio->status) == 'published' ? 'selected' : '' }}>Published</option>
                                <option value="draft" {{ old('status', $portfolio->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            </select>
                            @error('status')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Featured -->
                        <div class="flex items-center">
                            <input type="checkbox" 
                                   id="featured" 
                                   name="featured" 
                                   value="1"
                                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                                   {{ old('featured', $portfolio->featured) ? 'checked' : '' }}>
                            <label for="featured" class="ml-3 text-sm font-medium text-gray-700">
                                Portfolio Unggulan
                            </label>
                        </div>
                        <p class="text-sm text-gray-500">Portfolio unggulan akan ditampilkan lebih prominent</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                    <div class="space-y-3">
                        <button type="submit" 
                                class="w-full inline-flex items-center justify-center px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 shadow-sm">
                            <i class="fas fa-save mr-2"></i>
                            Update Portfolio
                        </button>
                        <a href="{{ route('admin.portfolios.index') }}" 
                           class="w-full inline-flex items-center justify-center px-4 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200">
                            <i class="fas fa-times mr-2"></i>
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadArea = document.getElementById('upload-area');
    const fileInput = document.getElementById('image');
    const uploadPlaceholder = document.getElementById('upload-placeholder');
    const imagePreview = document.getElementById('image-preview');
    const previewImg = document.getElementById('preview-img');
    const fileName = document.getElementById('file-name');
    const currentImage = document.getElementById('current-image');

    // Click to upload
    uploadArea.addEventListener('click', () => {
        fileInput.click();
    });

    // Drag and drop
    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('border-blue-400', 'bg-blue-50');
    });

    uploadArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('border-blue-400', 'bg-blue-50');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('border-blue-400', 'bg-blue-50');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFileSelect(files[0]);
        }
    });

    // File input change
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            handleFileSelect(e.target.files[0]);
        }
    });

    function handleFileSelect(file) {
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                fileName.textContent = file.name;
                uploadPlaceholder.classList.add('hidden');
                imagePreview.classList.remove('hidden');
                
                // Hide current image when new image is selected
                if (currentImage) {
                    currentImage.style.opacity = '0.5';
                }
            };
            reader.readAsDataURL(file);
        }
    }
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