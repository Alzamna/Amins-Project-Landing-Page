@extends('layouts.app')

@section('title', $portfolio->title)

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ route('portofolio') }}" 
                   class="inline-flex items-center text-blue-900 hover:text-blue-700 transition-colors duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali ke Portfolio
                </a>
            </div>

            <!-- Portfolio Header -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
                <div class="relative">
                    <img src="{{ asset('storage/' . $portfolio->image) }}" 
                         alt="{{ $portfolio->title }}" 
                         class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <span class="inline-block bg-yellow-400 text-yellow-900 text-sm font-medium px-4 py-2 rounded-full mb-3">
                            {{ $portfolio->category }}
                        </span>
                        <h1 class="text-4xl font-bold mb-2">{{ $portfolio->title }}</h1>
                    </div>
                </div>
            </div>

            <!-- Portfolio Details -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-blue-900 mb-6">Deskripsi Proyek</h2>
                        <div class="prose prose-lg max-w-none text-gray-700">
                            {!! $portfolio->description !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-6">
                    <!-- Technologies -->
                    @if($portfolio->technologies && is_array($portfolio->technologies))
                        <div class="bg-white rounded-2xl shadow-xl p-6">
                            <h3 class="text-xl font-bold text-blue-900 mb-4">Teknologi</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($portfolio->technologies as $tech)
                                    <span class="bg-blue-100 text-blue-800 px-3 py-2 rounded-lg text-sm font-medium">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Project Info -->
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-blue-900 mb-4">Informasi Proyek</h3>
                        <div class="space-y-3">
                            <div>
                                <span class="text-gray-600 font-medium">Kategori:</span>
                                <span class="ml-2 text-gray-800">{{ $portfolio->category }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600 font-medium">Tanggal:</span>
                                <span class="ml-2 text-gray-800">{{ $portfolio->created_at->format('F Y') }}</span>
                            </div>
                            @if($portfolio->project_url)
                                <div>
                                    <span class="text-gray-600 font-medium">URL:</span>
                                    <a href="{{ $portfolio->project_url }}" 
                                       target="_blank" 
                                       class="ml-2 text-blue-600 hover:text-blue-800 underline">
                                        Lihat Proyek
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- CTA Button -->
                    @if($portfolio->project_url)
                        <div class="bg-white rounded-2xl shadow-xl p-6">
                            <a href="{{ $portfolio->project_url }}" 
                               target="_blank"
                               class="w-full bg-blue-900 hover:bg-blue-800 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                Lihat Proyek Live
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
