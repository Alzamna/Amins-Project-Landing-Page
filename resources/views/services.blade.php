@extends('layouts.app')

@section('title', 'Services')

@section('content')
<!-- Services Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-white min-h-screen">
    <div class="container mx-auto px-4">
        
        <!-- All Services Section -->
        <div class="mb-20">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                    Layanan Lengkap Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Eksplorasi semua layanan teknologi yang kami tawarkan untuk mendukung pertumbuhan bisnis Anda
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Service Card 1 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-blue-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                            Data Structuring
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Layanan mengolah dan mengatur data secara terstruktur untuk kemudahan akses dan analisis.
                        </p>
                        <div class="mt-4 flex items-center text-blue-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-emerald-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-emerald-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-emerald-600 transition-colors duration-300">
                            Managed IT Services
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Pengelolaan infrastruktur IT yang komprehensif untuk operasional bisnis yang optimal.
                        </p>
                        <div class="mt-4 flex items-center text-emerald-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-indigo-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-indigo-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300">
                            Web Development
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Pengembangan website dan aplikasi web yang responsif dan user-friendly.
                        </p>
                        <div class="mt-4 flex items-center text-indigo-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-pink-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-pink-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-pink-600 transition-colors duration-300">
                            UI/UX Design
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Desain antarmuka yang intuitif dan pengalaman pengguna yang optimal.
                        </p>
                        <div class="mt-4 flex items-center text-pink-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-teal-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-teal-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-teal-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v3M7 4H5a1 1 0 00-1 1v3m0 0v8a2 2 0 002 2h10a2 2 0 002-2V8m0 0V5a1 1 0 00-1-1h-2M7 4h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-teal-600 transition-colors duration-300">
                            Graphic Design
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Desain grafis profesional untuk kebutuhan branding dan marketing material.
                        </p>
                        <div class="mt-4 flex items-center text-teal-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-red-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-red-600 transition-colors duration-300">
                            Videography
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Produksi video profesional untuk kebutuhan promosi dan dokumentasi perusahaan.
                        </p>
                        <div class="mt-4 flex items-center text-red-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 7 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-yellow-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-yellow-600 transition-colors duration-300">
                            Network Solutions
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Solusi jaringan komputer yang handal dan aman untuk kebutuhan bisnis.
                        </p>
                        <div class="mt-4 flex items-center text-yellow-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Service Card 8 -->
                <div class="service-card group bg-white rounded-2xl p-6 border border-gray-100 hover:border-cyan-200 hover:shadow-xl transition-all duration-300 cursor-pointer">
                    <div class="flex flex-col h-full">
                        <div class="w-12 h-12 bg-cyan-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-cyan-200 transition-colors duration-300">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors duration-300">
                            Cyber Security
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            Perlindungan sistem dan data dari ancaman cyber dengan teknologi keamanan terdepan.
                        </p>
                        <div class="mt-4 flex items-center text-cyan-600 text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="mb-20">
            <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                            Mengapa Memilih <span class="text-blue-600">Kami?</span>
                        </h2>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            Kami berkomitmen memberikan solusi teknologi terbaik dengan pendekatan yang personal dan hasil yang terukur.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Tim Profesional Berpengalaman</h3>
                                    <p class="text-gray-600">Didukung oleh tim ahli dengan pengalaman bertahun-tahun di industri teknologi.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Teknologi Terdepan</h3>
                                    <p class="text-gray-600">Menggunakan teknologi dan tools terbaru untuk hasil yang optimal dan future-proof.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Support 24/7</h3>
                                    <p class="text-gray-600">Layanan dukungan teknis yang responsif dan tersedia kapan saja Anda membutuhkan.</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                                    <svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-2">Harga Kompetitif</h3>
                                    <p class="text-gray-600">Solusi berkualitas tinggi dengan harga yang terjangkau dan transparan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <div class="bg-gradient-to-br from-blue-600 to-purple-700 rounded-2xl p-8 text-white">
                            <h3 class="text-2xl font-bold mb-4">Butuh Konsultasi?</h3>
                            <p class="text-blue-100 mb-6 leading-relaxed">
                                Diskusikan kebutuhan project Anda dengan tim ahli kami. Konsultasi gratis untuk solusi terbaik.
                            </p>
                            <a href="{{ route('contact') }}" class="inline-flex items-center bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold hover:bg-gray-50 transition-colors duration-300">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Hubungi Kami
                            </a>
                        </div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-4 -right-4 w-24 h-24 bg-yellow-400 rounded-full opacity-20"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-pink-400 rounded-full opacity-20"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Process Section -->
        <div class="text-center">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Proses Kerja Kami
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-16">
                Metodologi yang terstruktur dan terbukti untuk memastikan hasil terbaik dalam setiap project
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <!-- Connection Line -->
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-blue-200 to-orange-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Konsultasi</h3>
                    <p class="text-gray-600 leading-relaxed">Diskusi mendalam tentang kebutuhan, tujuan, dan analisis requirement project Anda.</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-orange-200 to-emerald-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Perencanaan</h3>
                    <p class="text-gray-600 leading-relaxed">Penyusunan timeline detail, estimasi budget, dan strategi pelaksanaan yang komprehensif.</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-emerald-200 to-purple-200"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pengembangan</h3>
                    <p class="text-gray-600 leading-relaxed">Eksekusi project dengan metodologi agile dan komunikasi berkala untuk hasil optimal.</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step group">
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">4</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">Testing menyeluruh, deployment, training, dan maintenance berkelanjutan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Enhanced Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-30px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Featured Service Cards */
.featured-service {
    animation: fadeInUp 0.8s ease-out forwards;
    animation-delay: calc(var(--delay, 0) * 0.2s);
}

.featured-service:nth-child(1) { --delay: 1; }
.featured-service:nth-child(2) { --delay: 2; }
.featured-service:nth-child(3) { --delay: 3; }

/* Service Cards */
.service-card {
    animation: fadeInUp 0.6s ease-out forwards;
    animation-delay: calc(var(--delay, 0) * 0.1s);
    transform: translateY(20px);
    opacity: 0;
}

.service-card:nth-child(1) { --delay: 1; }
.service-card:nth-child(2) { --delay: 2; }
.service-card:nth-child(3) { --delay: 3; }
.service-card:nth-child(4) { --delay: 4; }
.service-card:nth-child(5) { --delay: 5; }
.service-card:nth-child(6) { --delay: 6; }
.service-card:nth-child(7) { --delay: 7; }
.service-card:nth-child(8) { --delay: 8; }

.service-card:hover {
    transform: translateY(-8px);
}

/* Process Steps */
.process-step {
    animation: slideInLeft 0.8s ease-out forwards;
    animation-delay: calc(var(--delay, 0) * 0.2s);
    opacity: 0;
}

.process-step:nth-child(1) { --delay: 1; }
.process-step:nth-child(2) { --delay: 2; }
.process-step:nth-child(3) { --delay: 3; }
.process-step:nth-child(4) { --delay: 4; }

/* Floating Animation for Decorative Elements */
.absolute.w-24,
.absolute.w-16 {
    animation: float 6s ease-in-out infinite;
}

.absolute.w-16 {
    animation-delay: 3s;
}

/* Responsive Design */
@media (max-width: 768px) {
    .featured-service {
        margin-bottom: 1.5rem;
    }
    
    .service-card {
        margin-bottom: 1rem;
    }
    
    .process-step .w-20 {
        width: 4rem;
        height: 4rem;
    }
    
    .process-step .text-2xl {
        font-size: 1.5rem;
    }
}

/* Enhanced Hover Effects */
.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(147, 51, 234, 0.05));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 1rem;
    pointer-events: none;
}

.service-card:hover::before {
    opacity: 1;
}

/* Smooth Transitions */
* {
    transition-property: transform, opacity, background-color, border-color, color, box-shadow;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced intersection observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe all animated elements
    const animatedElements = document.querySelectorAll('.featured-service, .service-card, .process-step');
    animatedElements.forEach(el => observer.observe(el));
    
    // Service card interactions
    const serviceCards = document.querySelectorAll('.service-card, .featured-service');
    
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            const serviceName = this.querySelector('h3').textContent;
            console.log(`Clicked on ${serviceName} service`);
            
            // Add click animation
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Here you would navigate to service detail page
            // window.location.href = `/services/${serviceName.toLowerCase().replace(/\s+/g, '-')}`;
        });
        
        // Enhanced hover effects
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Contact CTA button enhancement
    const ctaButton = document.querySelector('a[href*="contact"]');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(e) {
            // Add loading animation
            const originalHTML = this.innerHTML;
            this.innerHTML = `
                <svg class="w-5 h-5 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Loading...
            `;
            
            setTimeout(() => {
                this.innerHTML = originalHTML;
            }, 1000);
        });
    }
    
    // Parallax effect for decorative elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const decorativeElements = document.querySelectorAll('.absolute.w-24, .absolute.w-16');
        
        decorativeElements.forEach((el, index) => {
            const speed = 0.5 + (index * 0.2);
            el.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });
    
    // Enhanced process step animations
    const processSteps = document.querySelectorAll('.process-step');
    processSteps.forEach((step, index) => {
        step.addEventListener('mouseenter', function() {
            this.querySelector('.w-20').style.transform = 'scale(1.1) rotate(5deg)';
        });
        
        step.addEventListener('mouseleave', function() {
            this.querySelector('.w-20').style.transform = 'scale(1) rotate(0deg)';
        });
    });
});

// Service filtering functionality (if needed)
function filterServices(category) {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        const serviceName = card.querySelector('h3').textContent.toLowerCase();
        
        if (category === 'all' || serviceName.includes(category.toLowerCase())) {
            card.style.display = 'block';
            card.style.animation = 'fadeInUp 0.6s ease-out forwards';
        } else {
            card.style.display = 'none';
        }
    });
}

// Search functionality (if needed)
function searchServices(query) {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        const serviceName = card.querySelector('h3').textContent.toLowerCase();
        const serviceDesc = card.querySelector('p').textContent.toLowerCase();
        
        if (serviceName.includes(query.toLowerCase()) || serviceDesc.includes(query.toLowerCase())) {
            card.style.display = 'block';
            card.style.opacity = '1';
        } else {
            card.style.display = 'none';
        }
    });
}
</script>
@endsection
  