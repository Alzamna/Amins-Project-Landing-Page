<footer class="bg-blue-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    </div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-10 w-32 h-32 bg-blue-800 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-orange-400 rounded-full opacity-20 animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-blue-700 rounded-full opacity-30 animate-pulse"></div>
    </div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
            <!-- Company Info -->
            <div class="space-y-6">
                <!-- Logo -->
                <div class="transform hover:scale-105 transition-transform duration-300">
                    <img src="{{ asset('images/logo-aminsproject.png') }}" 
                         alt="Logo Amins Project Teknologi Indonesia" 
                         class="h-16 w-auto filter brightness-110">
                </div>
                
                <!-- Company Description -->
                <div class="bg-blue-800/30 backdrop-blur-sm p-6 rounded-xl border border-blue-700/30 hover:bg-blue-800/40 transition-all duration-300">
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Amins Project Teknologi Indonesia adalah sebuah perusahaan yang bergerak dalam bidang Software Developer, Riset Teknologi, Teknologi Informasi, Penjualan Perangkat Teknologi dan Multimedia Digital Creative yang berdiri pada tahun 2015.
                    </p>
                </div>
                
                <!-- Social Media -->
                <div class="space-y-3">
                    <h5 class="text-blue-200 font-medium text-sm uppercase tracking-wider">Follow Us</h5>
                    <div class="flex space-x-3">
                        <a href="#" class="group w-10 h-10 bg-blue-800/50 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-blue-600 hover:scale-110 transition-all duration-300 border border-blue-700/30">
                            <svg class="w-5 h-5 text-blue-200 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="group w-10 h-10 bg-red-600/50 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-red-500 hover:scale-110 transition-all duration-300 border border-red-500/30">
                            <svg class="w-5 h-5 text-red-200 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="#" class="group w-10 h-10 bg-pink-600/50 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-pink-500 hover:scale-110 transition-all duration-300 border border-pink-500/30">
                            <svg class="w-6 h-6 text-pink-200 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7.75 2A5.75 5.75 0 002 7.75v8.5A5.75 5.75 0 007.75 22h8.5A5.75 5.75 0 0022 16.25v-8.5A5.75 5.75 0 0016.25 2h-8.5zm0 1.5h8.5A4.25 4.25 0 0120.5 7.75v8.5a4.25 4.25 0 01-4.25 4.25h-8.5A4.25 4.25 0 013.5 16.25v-8.5A4.25 4.25 0 017.75 3.5zM12 7a5 5 0 100 10 5 5 0 000-10zm0 1.5a3.5 3.5 0 110 7 3.5 3.5 0 010-7zm5.25-.88a1.13 1.13 0 11-2.25 0 1.13 1.13 0 012.25 0z" />
                            </svg>
                        </a>
                        <a href="https://wa.me/6289537980511" class="group w-10 h-10 bg-green-600/50 backdrop-blur-sm rounded-lg flex items-center justify-center hover:bg-green-500 hover:scale-110 transition-all duration-300 border border-green-500/30">
                            <svg class="w-5 h-5 text-green-200 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-6 bg-gradient-to-b from-orange-400 to-orange-600 rounded-full"></div>
                    <h4 class="text-white font-bold text-lg">Quick Links</h4>
                </div>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                            <svg class="w-4 h-4 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tentang') }}" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                            <svg class="w-4 h-4 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Tentang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                            <svg class="w-4 h-4 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                            <svg class="w-4 h-4 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Shop</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                            <svg class="w-4 h-4 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="group-hover:translate-x-1 transition-transform duration-300">Kontak</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-6 bg-gradient-to-b from-orange-400 to-orange-600 rounded-full"></div>
                    <h4 class="text-white font-bold text-lg">Contact Us</h4>
                </div>
                <div class="space-y-3">
                    <a href="https://maps.app.goo.gl/eko2ZQkm6PRWgBnp7" target="_blank" rel="noopener noreferrer" class="group flex items-start space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30 cursor-pointer">
                        <svg class="w-5 h-5 text-orange-400 group-hover:text-orange-300 transition-colors duration-300 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div class="group-hover:translate-x-1 transition-transform duration-300">
                            <p class="font-medium">Alamat</p>
                            <p class="text-sm opacity-80">Jl. Cempedak VI, Kota Madiun</p>
                        </div>
                    </a>
                    
                    <a href="tel:+6289537980511" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                        <svg class="w-5 h-5 text-orange-400 group-hover:text-orange-300 transition-colors duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div class="group-hover:translate-x-1 transition-transform duration-300">
                            <p class="font-medium">Telepon</p>
                            <p class="text-sm opacity-80">+62 895-3798-0511</p>
                        </div>
                    </a>
                    
                    <a href="https://wa.me/6289537980511" target="_blank" rel="noopener noreferrer" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-green-600/20 hover:border-green-500/30 transition-all duration-300 border border-transparent">
                        <svg class="w-5 h-5 text-green-400 group-hover:text-green-300 transition-colors duration-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                        <div class="group-hover:translate-x-1 transition-transform duration-300">
                            <p class="font-medium">WhatsApp</p>
                            <p class="text-sm opacity-80">+62 895-3798-0511</p>
                        </div>
                    </a>
                    
                    <a href="mailto:aminstech@gmail.com" class="group flex items-center space-x-3 px-4 py-3 rounded-lg text-blue-100 hover:text-white hover:bg-blue-800/40 transition-all duration-300 border border-transparent hover:border-blue-700/30">
                        <svg class="w-5 h-5 text-orange-400 group-hover:text-orange-300 transition-colors duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <div class="group-hover:translate-x-1 transition-transform duration-300">
                            <p class="font-medium">Email</p>
                            <p class="text-sm opacity-80">aminstech@gmail.com</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Company Values -->
            <div class="space-y-6">
                <div class="flex items-center space-x-2">
                    <div class="w-1 h-6 bg-gradient-to-b from-orange-400 to-orange-600 rounded-full"></div>
                    <h4 class="text-white font-bold text-lg">Our Values</h4>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="group bg-blue-800/30 backdrop-blur-sm p-4 rounded-xl border border-blue-700/30 hover:bg-blue-800/50 hover:border-orange-400/30 transition-all duration-300 text-center">
                        <div class="w-8 h-8 bg-orange-400/20 rounded-lg flex items-center justify-center mx-auto mb-2 group-hover:bg-orange-400/30 transition-colors duration-300">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 text-sm font-medium group-hover:text-white transition-colors duration-300">Amanah</span>
                    </div>
                    <div class="group bg-blue-800/30 backdrop-blur-sm p-4 rounded-xl border border-blue-700/30 hover:bg-blue-800/50 hover:border-orange-400/30 transition-all duration-300 text-center">
                        <div class="w-8 h-8 bg-orange-400/20 rounded-lg flex items-center justify-center mx-auto mb-2 group-hover:bg-orange-400/30 transition-colors duration-300">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 text-sm font-medium group-hover:text-white transition-colors duration-300">Mutu</span>
                    </div>
                    <div class="group bg-blue-800/30 backdrop-blur-sm p-4 rounded-xl border border-blue-700/30 hover:bg-blue-800/50 hover:border-orange-400/30 transition-all duration-300 text-center">
                        <div class="w-8 h-8 bg-orange-400/20 rounded-lg flex items-center justify-center mx-auto mb-2 group-hover:bg-orange-400/30 transition-colors duration-300">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 text-sm font-medium group-hover:text-white transition-colors duration-300">Iman</span>
                    </div>
                    <div class="group bg-blue-800/30 backdrop-blur-sm p-4 rounded-xl border border-blue-700/30 hover:bg-blue-800/50 hover:border-orange-400/30 transition-all duration-300 text-center">
                        <div class="w-8 h-8 bg-orange-400/20 rounded-lg flex items-center justify-center mx-auto mb-2 group-hover:bg-orange-400/30 transition-colors duration-300">
                            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                            </svg>
                        </div>
                        <span class="text-blue-100 text-sm font-medium group-hover:text-white transition-colors duration-300">Nasionalis</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="bg-blue-800/50 backdrop-blur-sm py-6 relative z-10 border-t border-blue-700/30">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0">
                <p class="text-blue-200 text-sm text-center md:text-left">
                    © {{ date('Y') }} • Amins Project Teknologi Indonesia. All Rights Reserved.
                </p>
                
            </div>
        </div>
    </div>
</footer>

<!-- Custom Animations CSS -->
<style>
/* Floating Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(2deg); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(-2deg); }
}

.animate-float { animation: float 8s ease-in-out infinite; }
.animate-float-delayed { animation: float-delayed 10s ease-in-out infinite; }

/* Hover Effects */
.group:hover .group-hover\:translate-x-1 {
    transform: translateX(0.25rem);
}

/* Backdrop Blur Support */
@supports (backdrop-filter: blur(10px)) {
    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
    }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .animate-float,
    .animate-float-delayed {
        animation-duration: 6s;
    }
    
    /* Adjust grid for mobile */
    .grid.lg\:grid-cols-4 {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .grid.md\:grid-cols-2 {
        grid-template-columns: 1fr;
    }
    
    /* Adjust spacing for mobile */
    .space-y-6 {
        gap: 1.5rem;
    }
    
    .px-4.py-3 {
        padding: 0.75rem 1rem;
    }
}

@media (max-width: 640px) {
    /* Further mobile adjustments */
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .py-16 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    
    .text-lg {
        font-size: 1rem;
    }
    
    .h-16 {
        height: 3rem;
    }
}
</style>
