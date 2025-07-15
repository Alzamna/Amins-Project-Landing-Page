@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 pt-16 pb-10 flex flex-col">
    <div class="flex-grow">
        <!-- Header Section -->
        <div class="text-center mb-10 mt-8">
            <h1 class="text-5xl font-bold text-blue-900 mb-6">
                Portfolio Kami
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Jelajahi koleksi proyek-proyek terbaik yang telah kami kerjakan dengan dedikasi tinggi dan inovasi terdepan
            </p>
        </div>

        <!-- Filter Categories -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="portfolio-filter active bg-blue-900 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-800" 
                    data-filter="all">
                Semua Portfolio
            </button>
            @foreach($categories as $category)
                <button class="portfolio-filter bg-white text-blue-900 px-6 py-3 rounded-full font-medium transition-all duration-300 hover:bg-blue-50 border border-blue-200" 
                        data-filter="{{ Str::slug($category) }}">
                    {{ $category }}
                </button>
            @endforeach
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($portfolios as $portfolio)
                <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer" 
                     data-category="{{ Str::slug($portfolio->category) }}">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" 
                         alt="{{ $portfolio->title }}" 
                         class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                    
                    <!-- Popup Overlay -->
                    <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                        <div class="flex items-center justify-between">
                            <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                    {{ $portfolio->category }}
                                </span>
                                <h3 class="text-xl font-bold text-blue-900">
                                    {{ $portfolio->title }}
                                </h3>
                                @if($portfolio->technologies && is_array($portfolio->technologies))
                                    <div class="flex flex-wrap gap-1 mt-2">
                                        @foreach(array_slice($portfolio->technologies, 0, 3) as $tech)
                                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded">
                                                {{ $tech }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <a href="{{ route('portofolio.show', $portfolio->slug) }}" 
                               class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16">
                    <div class="text-gray-400 mb-4">
                        <svg class="w-24 h-24 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 mb-2">Belum Ada Portfolio</h3>
                    <p class="text-gray-500">Portfolio sedang dalam tahap pengembangan</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.portfolio-filter');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-900', 'text-white');
                btn.classList.add('bg-white', 'text-blue-900', 'border', 'border-blue-200');
            });
            
            this.classList.add('active', 'bg-blue-900', 'text-white');
            this.classList.remove('bg-white', 'text-blue-900', 'border', 'border-blue-200');
            
            // Filter portfolio items
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s ease-in-out';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
@endsection
