@extends('layouts.app')

@section('head')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
@endsection

@section('content')
<!-- Scroll to Top Button -->
<button id="scrollToTopBtn"
    class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-lg hover:bg-blue-700 transition-all duration-300 opacity-0 pointer-events-none transform translate-y-4">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7M5 21l7-7 7 7" />
    </svg>
</button>

<!-- Hero Section -->
<section id="hero" class="relative overflow-hidden min-h-screen flex items-center font-poppins">
    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700"></div>
    
    <!-- Geometric Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Large circle - top right -->
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-blue-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <!-- Medium circle - center right -->
        <div class="absolute top-1/2 -right-10 w-60 h-60 bg-blue-500/15 rounded-full blur-2xl animate-float-slow"></div>
        <!-- Small circle - bottom left -->
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-800/25 rounded-full blur-xl animate-float"></div>
        <!-- Accent shapes -->
        <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-r from-blue-400/10 to-blue-600/10 rounded-full blur-xl animate-float-delayed"></div>
        <div class="absolute bottom-1/4 left-1/4 w-24 h-24 bg-gradient-to-r from-blue-700/15 to-blue-500/15 rounded-full blur-lg animate-pulse-slow"></div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
            <!-- Left Content -->
            <div class="space-y-8 text-white" data-aos="fade-right" data-aos-duration="1000">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-sm font-medium animate-fade-in">
                    <span class="w-2 h-2 bg-blue-400 rounded-full mr-2 animate-pulse"></span>
                    Professional Web Development
                </div>

                <!-- Main Heading -->
                <div class="space-y-4">
                    <h1 class="hero-title text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight animate-slide-up">
                        Jasa Pembuatan Website
                    </h1>
                    <h2 class="hero-subtitle text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight text-blue-300 animate-slide-up-delayed">
                        Professional & Halaman 1 Google 🏆
                    </h2>
                </div>

                <!-- Description -->
                <p class="text-blue-100 text-lg lg:text-xl leading-relaxed max-w-2xl animate-fade-in-delayed">
                    Spesialis Jasa Pembuatan Website kebutuhan Bisnis, Industri Hingga E-Commerce. 
                    Gratis Domain, Hosting dan <span class="font-semibold text-white">Maintenance Selamanya</span>
                </p>

                <!-- Service Selector -->
                <div class="space-y-4 animate-fade-in-delayed">
                    <select id="serviceSelector" class="w-full lg:w-80 px-4 py-4 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all duration-300 hover:bg-white/15">
                        <option value="" class="text-gray-800">Pilih Layanan...</option>
                        <option value="website" class="text-gray-800">Website Company Profile</option>
                        <option value="ecommerce" class="text-gray-800">E-Commerce</option>
                        <option value="landing" class="text-gray-800">Landing Page</option>
                        <option value="custom" class="text-gray-800">Custom Development</option>
                    </select>
                </div>

                <!-- Reviews -->
                <div class="flex items-center space-x-2 animate-fade-in-delayed">
                    <div class="flex text-yellow-400">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-5 h-5 fill-current animate-star-{{ $i + 1 }}" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        @endfor
                    </div>
                    <span class="text-blue-200 font-medium">Dari 150+ Reviews asli di Google Maps</span>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4 animate-fade-in-delayed">
                    <a href="{{ route('contact') }}" 
                       class="group bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 hover:scale-105 hover:shadow-xl text-center relative overflow-hidden">
                        <span class="relative z-10">Mulai Konsultasi</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </a>
                    <a href="{{ route('portofolio') }}" 
                       class="group border-2 border-white/30 text-white hover:bg-white/10 hover:border-white/50 px-8 py-4 rounded-lg font-semibold transition-all duration-300 text-center backdrop-blur-sm hover:scale-105">
                        <span class="group-hover:text-blue-200 transition-colors duration-300">Lihat Portfolio</span>
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative lg:ml-8 flex justify-center items-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <!-- Background Decorative Elements -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <!-- Large background circle -->
                    <div class="w-96 h-96 bg-gradient-to-br from-blue-400/20 to-blue-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
                </div>
                
                <!-- Floating geometric shapes -->
                <div class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-80 animate-float shadow-lg"></div>
                <div class="absolute top-20 right-16 w-16 h-16 bg-gradient-to-br from-blue-300 to-blue-400 rounded-2xl opacity-70 animate-float-delayed shadow-lg"></div>
                <div class="absolute bottom-20 left-16 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full opacity-60 animate-float-slow shadow-lg"></div>
                <div class="absolute bottom-32 right-8 w-14 h-14 bg-gradient-to-br from-blue-200 to-blue-300 rounded-2xl opacity-75 animate-float shadow-lg"></div>

                <!-- Main Image -->
                <div class="relative z-10 max-w-md mx-auto lg:max-w-lg">
                    <div class="relative">
                        <img src="{{ asset('images/intro.png') }}" 
                             alt="Professional Developer" 
                             class="w-full h-auto object-cover rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                        
                        <!-- Image overlay effect -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent rounded-2xl"></div>
                    </div>
                    
                    <!-- Floating consultation badge -->
                    <div class="absolute -bottom-4 -right-4 bg-white rounded-xl shadow-xl p-4 animate-bounce-slow hover:scale-110 transition-transform duration-300 cursor-pointer">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Konsultasi disini Yuk 👋</p>
                                <p class="text-xs text-gray-600">Gratis & Tanpa Komitmen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce cursor-pointer" id="scrollIndicator">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>


<style>
/* Custom animations */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(-3deg); }
}

@keyframes float-slow {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-10px) rotate(2deg); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-5px); }
}

@keyframes pulse-slow {
    0%, 100% { opacity: 0.8; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.05); }
}

@keyframes fade-in {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slide-up {
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Animation classes */
.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
    animation-delay: 2s;
}

.animate-float-slow {
    animation: float-slow 10s ease-in-out infinite;
    animation-delay: 4s;
}

.animate-bounce-slow {
    animation: bounce-slow 3s ease-in-out infinite;
}

.animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
}

.animate-fade-in {
    animation: fade-in 1s ease-out forwards;
}

.animate-fade-in-delayed {
    animation: fade-in 1s ease-out 0.5s forwards;
    opacity: 0;
}

.animate-slide-up {
    animation: slide-up 1s ease-out forwards;
}

.animate-slide-up-delayed {
    animation: slide-up 1s ease-out 0.3s forwards;
    opacity: 0;
}

/* Star animations */
@keyframes star-glow {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.animate-star-1 { animation: star-glow 2s ease-in-out infinite; animation-delay: 0.1s; }
.animate-star-2 { animation: star-glow 2s ease-in-out infinite; animation-delay: 0.2s; }
.animate-star-3 { animation: star-glow 2s ease-in-out infinite; animation-delay: 0.3s; }
.animate-star-4 { animation: star-glow 2s ease-in-out infinite; animation-delay: 0.4s; }
.animate-star-5 { animation: star-glow 2s ease-in-out infinite; animation-delay: 0.5s; }

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: 2rem;
        line-height: 1.3;
    }
}

@media (max-width: 640px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.75rem;
    }
}

/* Scroll to top button animations */
.scroll-to-top-visible {
    opacity: 1 !important;
    pointer-events: auto !important;
    transform: translateY(0) !important;
}

/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Font family */
.font-poppins {
    font-family: 'Poppins', sans-serif;
}

/* Loading states */
.loading {
    opacity: 0.7;
    pointer-events: none;
}

/* Hover effects */
.hover-lift:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

/* Focus states for accessibility */
button:focus,
select:focus,
a:focus {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}
</style>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    const scrollIndicator = document.getElementById('scrollIndicator');
    const heroSection = document.getElementById('hero');
    
    // Show/hide scroll to top button
    function toggleScrollToTopButton() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const heroHeight = heroSection.offsetHeight;
        
        if (scrollTop > heroHeight / 2) {
            scrollToTopBtn.classList.add('scroll-to-top-visible');
        } else {
            scrollToTopBtn.classList.remove('scroll-to-top-visible');
        }
    }
    
    // Scroll to top functionality
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Scroll indicator functionality
    scrollIndicator.addEventListener('click', function() {
        const nextSection = heroSection.nextElementSibling;
        if (nextSection) {
            nextSection.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
    
    // Service selector functionality
    const serviceSelector = document.getElementById('serviceSelector');
    serviceSelector.addEventListener('change', function() {
        const selectedValue = this.value;
        if (selectedValue) {
            // Add loading state
            this.classList.add('loading');
            
            // Simulate loading and redirect
            setTimeout(() => {
                // You can customize this based on your routes
                switch(selectedValue) {
                    case 'website':
                        window.location.href = '{{ route("services") }}#website';
                        break;
                    case 'ecommerce':
                        window.location.href = '{{ route("services") }}#ecommerce';
                        break;
                    case 'landing':
                        window.location.href = '{{ route("services") }}#landing';
                        break;
                    case 'custom':
                        window.location.href = '{{ route("contact") }}';
                        break;
                    default:
                        window.location.href = '{{ route("services") }}';
                }
            }, 500);
        }
    });
    
    // Consultation badge click
    const consultationBadge = document.querySelector('.animate-bounce-slow');
    if (consultationBadge) {
        consultationBadge.addEventListener('click', function() {
            window.location.href = '{{ route("contact") }}';
        });
    }
    
    // Parallax effect for background elements
    function handleParallax() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.absolute');
        
        parallaxElements.forEach((element, index) => {
            const speed = (index + 1) * 0.1;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    }
    
    // Throttled scroll handler
    let ticking = false;
    function handleScroll() {
        if (!ticking) {
            requestAnimationFrame(() => {
                toggleScrollToTopButton();
                handleParallax();
                ticking = false;
            });
            ticking = true;
        }
    }
    
    // Event listeners
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    // Initialize
    toggleScrollToTopButton();
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('[data-aos]').forEach(el => {
        observer.observe(el);
    });
    
    // Preload critical images
    const criticalImages = ['{{ asset("images/intro.png") }}'];
    criticalImages.forEach(src => {
        const img = new Image();
        img.src = src;
    });
});
</script>

<!-- Three Features Section -->
<section class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-blue-600 font-medium mb-2">Keunggulan Kami</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                Mengapa Memilih Kami?
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Tiga pilar utama yang menjadi kekuatan kami dalam memberikan solusi teknologi terbaik
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Project Analysis -->
            <div class="feature-card group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 text-center relative overflow-hidden transform hover:-translate-y-2">
                <!-- Background Animation -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Floating Elements -->
                <div class="absolute top-4 right-4 w-8 h-8 bg-blue-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-x-4 group-hover:translate-x-0"></div>
                <div class="absolute bottom-4 left-4 w-6 h-6 bg-orange-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 delay-100 transform -translate-x-4 group-hover:translate-x-0"></div>
                
                <div class="relative z-10">
                    <!-- Icon Container -->
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg group-hover:shadow-xl">
                        <svg class="w-12 h-12 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                        Project Analysis
                    </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Kami akan mencari informasi detail serta referensi tentang project-project baik project pemerintah maupun swasta di seluruh Indonesia
                    </p>
                    
                </div>
            </div>

            <!-- Great Experiences -->
            <div class="feature-card group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 text-center relative overflow-hidden transform hover:-translate-y-2">
                <!-- Background Animation -->
                <div class="absolute inset-0 bg-gradient-to-br from-green-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Floating Elements -->
                <div class="absolute top-4 right-4 w-8 h-8 bg-green-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-x-4 group-hover:translate-x-0"></div>
                <div class="absolute bottom-4 left-4 w-6 h-6 bg-orange-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 delay-100 transform -translate-x-4 group-hover:translate-x-0"></div>
                
                <div class="relative z-10">
                    <!-- Icon Container -->
                    <div class="w-24 h-24 bg-gradient-to-br from-green-100 to-green-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg group-hover:shadow-xl">
                        <svg class="w-12 h-12 text-green-600 group-hover:text-green-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                        Great Experiences
                    </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Kami memiliki pengalaman serta sumber daya manusia yang ahli, unggul serta berkualitas di bidang teknologi informasi serta digital creative untuk terus berinovasi.
                    </p>
                    
                </div>
            </div>

            <!-- Reference for Result -->
            <div class="feature-card group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 text-center relative overflow-hidden transform hover:-translate-y-2">
                <!-- Background Animation -->
                <div class="absolute inset-0 bg-gradient-to-br from-purple-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Floating Elements -->
                <div class="absolute top-4 right-4 w-8 h-8 bg-purple-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-x-4 group-hover:translate-x-0"></div>
                <div class="absolute bottom-4 left-4 w-6 h-6 bg-orange-100 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-700 delay-100 transform -translate-x-4 group-hover:translate-x-0"></div>
                
                <div class="relative z-10">
                    <!-- Icon Container -->
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg group-hover:shadow-xl">
                        <svg class="w-12 h-12 text-purple-600 group-hover:text-purple-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                        </svg>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                        Reference for Result
                    </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                        Kami selalu membuat paperline riset project berdasarkan informasi yang didapatkan serta create project baik di sektor pemerintahan maupun swasta.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left side - Image with geometric background -->
            <div class="relative order-2 lg:order-1">
                <!-- Animated Background Shapes -->
                <div class="absolute inset-0">
                    <!-- Main circles with animation -->
                    <div class="absolute top-0 left-20 w-64 h-64 bg-gradient-to-br from-orange-400 to-orange-500 rounded-full opacity-90 animate-float"></div>
                    <div class="absolute top-8 left-20 w-48 h-48 bg-gradient-to-br from-blue-900 to-blue-800 rounded-full animate-float-delayed"></div>
                    <div class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-300 to-orange-400 rounded-full opacity-70 animate-float-slow"></div>
                    <div class="absolute top-16 right-16 w-16 h-16 bg-gradient-to-br from-blue-800 to-blue-900 rounded-full animate-pulse"></div>
                    
                    <!-- Decorative floating elements -->
                    <div class="absolute top-12 left-32 w-4 h-4 bg-yellow-400 rounded-full animate-bounce-slow"></div>
                    <div class="absolute bottom-12 left-12 w-6 h-6 bg-yellow-400 rounded-full animate-bounce-delayed"></div>
                    <div class="absolute top-32 right-8 w-4 h-4 bg-yellow-400 rounded-full animate-bounce-slow"></div>
                    
                    <!-- Additional geometric shapes -->
                    <div class="absolute top-24 left-8 w-8 h-8 bg-blue-200 transform rotate-45 animate-spin-slow"></div>
                    <div class="absolute bottom-24 right-24 w-6 h-6 bg-orange-200 transform rotate-45 animate-spin-reverse"></div>
                </div>
                
                <!-- Main image with hover effects -->
                <div class="relative z-10 flex justify-end group">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl group-hover:shadow-3xl transition-all duration-500">
                        <img src="{{ asset('images/aboutus.png') }}" 
                             alt="Professional man with laptop - About Amins Project" 
                             class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                        
                        <!-- Image overlay on hover -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Content -->
            <div class="space-y-8 order-1 lg:order-2">
                <div class="space-y-6">
                    <div class="inline-block">
                        <p class="text-blue-600 font-medium mb-2 relative">
                            Tentang Kami
                            <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-gradient-to-r from-blue-600 to-orange-400 transform scale-x-0 animate-scale-x"></span>
                        </p>
                    </div>
                    
                    <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4 leading-tight">
                        <span class="inline-block animate-fade-in-up">AMINS PROJECT</span><br>
                        <span class="inline-block animate-fade-in-up animation-delay-200">TEKNOLOGI INDONESIA</span>
                    </h2>
                </div>
                
                <div class="space-y-6">
                    <p class="text-gray-600 leading-relaxed text-lg animate-fade-in-up animation-delay-400">
                        Amin's Project Teknologi Indonesia adalah sebuah bisnis yang 
                        bergerak dalam bidang Software Developer, Riset Teknologi, Teknologi 
                        Informasi, Penjualan Perangkat Teknologi dan Multimedia Digital 
                        Creative yang berdiri pada tahun 2015.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed animate-fade-in-up animation-delay-600">
                        Seluruh bidang yang telah kami kerjakan dikemas dengan kreatif, ringan, 
                        namun sangat membantu dalam pengembangan bisnis serta perusahaan anda. 
                        Kami berkomitmen memberikan pelayanan sebaik mungkin demi hasil yang memuaskan.
                    </p>
                </div>
                
                <!-- Stats Section -->
                <div class="grid grid-cols-3 gap-6 py-8 animate-fade-in-up animation-delay-800">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-900 counter" data-target="2015">0</div>
                        <div class="text-sm text-gray-600">Berdiri Sejak</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-900 counter" data-target="100">0</div>
                        <div class="text-sm text-gray-600">Project Selesai</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-900 counter" data-target="50">0</div>
                        <div class="text-sm text-gray-600">Client Puas</div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up animation-delay-1000">
                    <a href="{{ route('tentang') }}" class="group bg-blue-900 hover:bg-blue-800 text-white px-8 py-4 rounded-xl font-medium transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="mr-2">Selengkapnya</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    
                    <a href="tel:+6289537980511" class="group bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-4 rounded-xl font-medium transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-5 h-5 mr-3 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div class="text-left">
                            <div class="font-semibold">Kontak Kami</div>
                            <div class="text-sm opacity-90">+62 895-3798-0511</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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

@keyframes float-slow {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes bounce-slow {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
}

@keyframes bounce-delayed {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-12px); }
}

@keyframes spin-slow {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes spin-reverse {
    from { transform: rotate(360deg); }
    to { transform: rotate(0deg); }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes scale-x {
    from { transform: scaleX(0); }
    to { transform: scaleX(1); }
}

/* Apply animations */
.animate-float { animation: float 6s ease-in-out infinite; }
.animate-float-delayed { animation: float-delayed 8s ease-in-out infinite; }
.animate-float-slow { animation: float-slow 10s ease-in-out infinite; }
.animate-bounce-slow { animation: bounce-slow 3s ease-in-out infinite; }
.animate-bounce-delayed { animation: bounce-delayed 4s ease-in-out infinite; }
.animate-spin-slow { animation: spin-slow 20s linear infinite; }
.animate-spin-reverse { animation: spin-reverse 15s linear infinite; }
.animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }
.animate-scale-x { animation: scale-x 2s ease-out forwards; }

/* Animation delays */
.animation-delay-200 { animation-delay: 0.2s; }
.animation-delay-400 { animation-delay: 0.4s; }
.animation-delay-600 { animation-delay: 0.6s; }
.animation-delay-800 { animation-delay: 0.8s; }
.animation-delay-1000 { animation-delay: 1s; }

/* Feature cards staggered animation */
.feature-card:nth-child(1) { animation: fade-in-up 0.8s ease-out 0.2s forwards; opacity: 0; }
.feature-card:nth-child(2) { animation: fade-in-up 0.8s ease-out 0.4s forwards; opacity: 0; }
.feature-card:nth-child(3) { animation: fade-in-up 0.8s ease-out 0.6s forwards; opacity: 0; }

/* Counter animation will be handled by JavaScript */
.counter {
    transition: all 0.3s ease;
}

/* Enhanced shadows */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .animate-float,
    .animate-float-delayed,
    .animate-float-slow {
        animation-duration: 4s;
    }
}
</style>

<!-- JavaScript for Counter Animation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / 100;
        let current = 0;
        
        const updateCounter = () => {
            if (current < target) {
                current += increment;
                counter.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    };
    
    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCounter(counter);
                observer.unobserve(counter);
            }
        });
    });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});
</script>

<!-- Services Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-12 items-start">
            <!-- Left side - Title -->
            <div class="lg:col-span-4 space-y-6">
                <div>
                    <p class="text-blue-600 font-medium mb-2">Layanan Kami</p>
                    <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4 leading-tight">
                        Solusi Teknologi Terpadu untuk Bisnis Anda
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Kami menyediakan layanan teknologi informasi yang komprehensif, 
                        mulai dari konsultasi hingga implementasi solusi digital yang inovatif.
                    </p>
                </div>
            </div>
            
            <!-- Right side - Services Grid -->
            <div class="lg:col-span-8">
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- IT Konsultan -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                IT Konsultan & Strategi
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Konsultasi strategis untuk mengoptimalkan infrastruktur IT dan merancang 
                                solusi teknologi yang sesuai dengan kebutuhan bisnis Anda.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Software Development -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                Software Development
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Pengembangan aplikasi custom, sistem informasi, dan software enterprise 
                                yang disesuaikan dengan workflow dan kebutuhan spesifik perusahaan.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Web Development -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                Web Development
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Pembuatan website profesional, e-commerce, dan aplikasi web yang responsif 
                                dengan teknologi modern dan user experience yang optimal.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Mobile App Development -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                Mobile App Development
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Pengembangan aplikasi mobile Android dan iOS yang user-friendly dengan 
                                fitur lengkap dan performa optimal untuk berbagai kebutuhan bisnis.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Data Management -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                Data Management & Analytics
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Pengelolaan database, analisis data bisnis, dan implementasi sistem 
                                business intelligence untuk mendukung pengambilan keputusan strategis.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Digital Creative & Branding -->
                    <div class="service-card group bg-white rounded-xl p-8 border border-gray-200 hover:border-blue-300 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                        <!-- Background Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <!-- Icon -->
                        <div class="relative z-10 w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-200 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v22a1 1 0 01-1 1H4a1 1 0 01-1-1V1a1 1 0 011-1h2a1 1 0 011 1v3m0 0h8m-8 0V1"></path>
                            </svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-blue-900 mb-4 group-hover:text-blue-800 transition-colors duration-300">
                                Digital Creative & Branding
                            </h3>
                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Layanan desain grafis, branding digital, konten kreatif, dan strategi 
                                pemasaran digital untuk meningkatkan brand awareness dan engagement.
                            </p>
                        </div>
                        
                        <!-- Hover Arrow -->
                        <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- All Services Button -->
                <div class="text-center mt-12">
                    <a href="{{ route('services') }}" class="group bg-blue-900 hover:bg-blue-800 text-white px-10 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span class="mr-3">Lihat Semua Layanan</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Service Card Hover Effects */
.service-card {
    position: relative;
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.05));
    opacity: 0;
    transition: opacity 0.5s ease;
    border-radius: 0.75rem;
}

.service-card:hover::before {
    opacity: 1;
}

/* Icon Animation */
.service-card .w-16 {
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.service-card:hover .w-16 {
    transform: scale(1.1) rotate(5deg);
}

/* Text Animation */
.service-card h3 {
    transition: all 0.3s ease;
}

.service-card:hover h3 {
    transform: translateY(-2px);
}

/* Arrow Animation */
.service-card svg:last-child {
    transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* Staggered Animation */
.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
.service-card:nth-child(4) { animation-delay: 0.4s; }
.service-card:nth-child(5) { animation-delay: 0.5s; }
.service-card:nth-child(6) { animation-delay: 0.6s; }

/* Button Enhancement */
.service-card:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Responsive Design */
@media (max-width: 768px) {
    .service-card {
        padding: 1.5rem;
    }
    
    .service-card .w-16 {
        width: 3rem;
        height: 3rem;
    }
    
    .service-card h3 {
        font-size: 1.125rem;
    }
}

/* Loading Animation */
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

.service-card {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
.service-card:nth-child(4) { animation-delay: 0.4s; }
.service-card:nth-child(5) { animation-delay: 0.5s; }
.service-card:nth-child(6) { animation-delay: 0.6s; }
</style>

<!-- Portfolio Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="flex justify-between items-start mb-12">
            <div class="space-y-4">
                <p class="text-blue-600 font-medium">Portofolio Project</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                    Portofolio Project Yang<br>
                    Sudah Kami Kerjakan
                </h2>
                <p class="text-gray-600 max-w-lg">
                    Kami memiliki cukup pengalaman dibidang kami dengan 
                    bukti project yang sudah terselesaikan dengan baik serta 
                    hasil yang memuaskan.
                </p>
            </div>
            <a href="{{ route('portofolio') }}" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2 rounded-md font-medium transition-colors duration-200">
                All Portofolio
            </a>
        </div>

        <!-- Carousel Container -->
        <div class="relative overflow-hidden rounded-lg">
            <div class="carousel-track flex transition-transform duration-500 ease-in-out" id="portfolio-carousel-track">
                <!-- Slide 1 -->
                <div class="carousel-slide w-full flex-shrink-0">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Portfolio Item 1 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port1.png" 
                                 alt="Sistem Informasi CMS Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            Sistem Informasi
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 2 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port2.jpg" 
                                 alt="Web Application Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            Web Application
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide w-full flex-shrink-0">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Portfolio Item 3 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port3.png" 
                                 alt="E-commerce Platform Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            E-commerce Platform
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 4 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port4.jpg" 
                                 alt="Dashboard System Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            Dashboard System
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide w-full flex-shrink-0">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Portfolio Item 5 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port5.jpg" 
                                 alt="Corporate Website Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            Corporate Website
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 6 -->
                        <div class="portfolio-item relative bg-gray-100 rounded-lg overflow-hidden group cursor-pointer">
                            <img src="images/port6.jpg" 
                                 alt="Mobile Application Portfolio" 
                                 class="w-full h-80 object-cover transition-all duration-500 ease-out group-hover:scale-110 group-hover:brightness-75">
                            
                            <!-- Popup Overlay -->
                            <div class="portfolio-popup absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-sm p-6 transform translate-y-full opacity-0 transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="transform translate-y-4 transition-transform duration-700 ease-out group-hover:translate-y-0">
                                        <span class="inline-block bg-yellow-400 text-yellow-900 text-xs font-medium px-3 py-1 rounded-full mb-2 shadow-sm">
                                            Portofolio
                                        </span>
                                        <h3 class="text-xl font-bold text-blue-900">
                                            Mobile Application
                                        </h3>
                                    </div>
                                    <button class="bg-blue-900 hover:bg-blue-800 text-white p-3 rounded-lg transition-all duration-300 transform hover:scale-110 hover:rotate-3 shadow-lg">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Carousel Dots -->
        <div class="flex justify-center space-x-2 mt-8">
            <button class="carousel-dot w-2 h-2 rounded-full transition-all duration-500 ease-out bg-yellow-400 shadow-sm" 
                    onclick="goToPortfolioSlide(0)" 
                    id="portfolio-dot-0"></button>
            <button class="carousel-dot w-2 h-2 rounded-full transition-all duration-500 ease-out bg-gray-300 hover:bg-gray-400 shadow-sm" 
                    onclick="goToPortfolioSlide(1)" 
                    id="portfolio-dot-1"></button>
            <button class="carousel-dot w-2 h-2 rounded-full transition-all duration-500 ease-out bg-gray-300 hover:bg-gray-400 shadow-sm" 
                    onclick="goToPortfolioSlide(2)" 
                    id="portfolio-dot-2"></button>
        </div>

        <!-- View Portfolio Button -->
        <div class="text-center mt-12">
            <a href="{{ route('portofolio') }}" class="bg-blue-900 hover:bg-blue-800 text-white px-8 py-3 rounded-md font-medium transition-colors duration-200 inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Lihat Portofolio
            </a>
        </div>
    </div>
</section>

<!-- Portfolio Carousel JavaScript -->
<script>
let currentPortfolioSlide = 0;
const totalPortfolioSlides = 3;
let portfolioAutoSlideInterval;

function updatePortfolioCarousel() {
    const track = document.getElementById('portfolio-carousel-track');
    const translateX = -currentPortfolioSlide * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Enhanced dots animation
    for (let i = 0; i < totalPortfolioSlides; i++) {
        const dot = document.getElementById(`portfolio-dot-${i}`);
        if (dot) {
            if (i === currentPortfolioSlide) {
                dot.classList.remove('bg-gray-300', 'bg-gray-400', 'w-2', 'h-2');
                dot.classList.add('bg-yellow-400', 'w-8', 'h-2', 'shadow-lg');
                dot.style.transform = 'scale(1)';
                dot.style.boxShadow = '0 0 0 3px rgba(251, 191, 36, 0.2)';
            } else {
                dot.classList.remove('bg-yellow-400', 'w-8', 'h-2', 'shadow-lg');
                dot.classList.add('bg-gray-300', 'w-2', 'h-2');
                dot.style.transform = 'scale(1)';
                dot.style.boxShadow = 'none';
            }
        }
    }
}

function nextPortfolioSlide() {
    currentPortfolioSlide = (currentPortfolioSlide + 1) % totalPortfolioSlides;
    updatePortfolioCarousel();
    resetPortfolioAutoSlide();
}

function goToPortfolioSlide(slideIndex) {
    currentPortfolioSlide = slideIndex;
    updatePortfolioCarousel();
    resetPortfolioAutoSlide();
}

function startPortfolioAutoSlide() {
    portfolioAutoSlideInterval = setInterval(() => {
        nextPortfolioSlide();
    }, 5000); // Change slide every 5 seconds
}

function resetPortfolioAutoSlide() {
    clearInterval(portfolioAutoSlideInterval);
    startPortfolioAutoSlide();
}

// Initialize portfolio carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    updatePortfolioCarousel();
    startPortfolioAutoSlide();
    
    // Pause auto-slide on hover over carousel
    const portfolioCarouselSection = document.getElementById('portfolio-carousel-track').parentElement;
    portfolioCarouselSection.addEventListener('mouseenter', () => {
        clearInterval(portfolioAutoSlideInterval);
    });
    
    portfolioCarouselSection.addEventListener('mouseleave', () => {
        startPortfolioAutoSlide();
    });

    // Add click handlers for portfolio items
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    portfolioItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            console.log(`Portfolio item ${index + 1} clicked`);
        });
    });
});

// Enhanced dot hover animations
document.addEventListener('DOMContentLoaded', function() {
    const dots = document.querySelectorAll('.carousel-dot');
    
    dots.forEach((dot, index) => {
        dot.addEventListener('mouseenter', function() {
            if (!this.classList.contains('bg-yellow-400')) {
                this.style.transform = 'scale(1.3)';
                this.style.backgroundColor = '#9CA3AF';
            }
        });
        
        dot.addEventListener('mouseleave', function() {
            if (!this.classList.contains('bg-yellow-400')) {
                this.style.transform = 'scale(1)';
                this.style.backgroundColor = '#D1D5DB';
            }
        });
    });
});
</script>

<style>
/* Enhanced Portfolio Item Styles */
.portfolio-item {
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
}

.portfolio-popup {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    backdrop-filter: blur(8px);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.portfolio-item:hover .portfolio-popup {
    transform: translateY(0);
    opacity: 1;
}

/* Enhanced Carousel Dot Styles */
.carousel-dot {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    cursor: pointer;
    border: none;
    outline: none;
}

.carousel-dot:focus {
    outline: none;
}

.carousel-dot.bg-yellow-400 {
    background: linear-gradient(135deg, #FCD34D, #F59E0B);
    animation: pulse-glow 2s infinite;
}

@keyframes pulse-glow {
    0%, 100% {
        box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.2);
    }
    50% {
        box-shadow: 0 0 0 6px rgba(251, 191, 36, 0.1);
    }
}

/* Enhanced Image Transitions */
.carousel-slide img {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.carousel-track {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .portfolio-popup {
        padding: 1rem;
    }
    
    .portfolio-popup h3 {
        font-size: 1.125rem;
    }
    
    .carousel-dot {
        width: 0.375rem;
        height: 0.375rem;
    }
    
    .carousel-dot.bg-yellow-400 {
        width: 1.5rem;
        height: 0.375rem;
    }
}

/* Enhanced hover effects with staggered animations */
.portfolio-item .portfolio-popup > div > div {
    transition-delay: 0.1s;
}

.portfolio-item .portfolio-popup button {
    transition-delay: 0.2s;
}

/* Smooth backdrop blur effect */
@supports (backdrop-filter: blur(8px)) {
    .portfolio-popup {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
    }
}

@supports not (backdrop-filter: blur(8px)) {
    .portfolio-popup {
        background: rgba(255, 255, 255, 0.98);
    }
}
</style>

<!-- Client Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-blue-900 mb-4">Client</h2>
        </div>

        <!-- Client Logos Row -->
        <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-12 max-w-6xl mx-auto">
            <!-- Client 1 -->
            <div class="flex justify-center items-center">
                <img src="images/logo-pacitan.png" 
                     alt="Pacitan" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 2 -->
            <div class="flex justify-center items-center">
                <img src="images/logo-jepara.png" 
                     alt="Jepara" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 3 -->
            <div class="flex justify-center items-center">
                <img src="images/logo-kdpdt.png" 
                     alt="KDPDT" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 4 -->
            <div class="flex justify-center items-center">
                <img src="images/logo-bank.jpg" 
                     alt="Bank" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 5 -->
            <div class="flex justify-center items-center">
                <img src="images/logo-pupr.jpg" 
                     alt="PUPR" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 6 -->
            <div class="flex justify-center items-center">
                <img src="images/L-Korlantas.png" 
                     alt="Korlantas" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
            
            <!-- Client 7 -->
            <div class="flex justify-center items-center">
                <img src="images/Logo_Jombang.jpg" 
                     alt="Jombang" 
                     class="h-16 lg:h-20 w-auto object-contain opacity-70 hover:opacity-100 transition-opacity duration-300" />
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-900 to-blue-800 text-white relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-0 w-32 h-32 bg-blue-700 rounded-full opacity-20 -translate-x-16 -translate-y-16"></div>
        <div class="absolute bottom-0 right-0 w-48 h-48 bg-blue-700 rounded-full opacity-20 translate-x-24 translate-y-24"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-orange-500 rounded-full opacity-30"></div>
        <div class="absolute top-1/4 right-1/4 w-12 h-12 bg-orange-400 rounded-full opacity-40"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-8 items-center">
            <!-- Text Section -->
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold mb-4 leading-snug">
                    Collaborate and Build<br>
                    Relationships.
                </h2>
            </div>

            <!-- Contact and Button -->
            <div class="flex flex-col sm:flex-row gap-4 items-center justify-end">
                <div class="text-right">
                    <p class="text-orange-400 font-medium">Hubungi Sekarang</p>
                    <p class="text-xl font-bold">+62 895-3798-0511</p>
                </div>

                <!-- Konsultasi Button with Animation -->
                <a href="{{ route('contact') }}"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-md font-medium transition-all duration-300 inline-flex items-center gap-2
                           hover:scale-105 hover:shadow-lg hover:-translate-y-1 active:scale-95">
                    Konsultasi Gratis
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Left side - FAQ Content -->
            <div class="space-y-6">
                <div>
                    <p class="text-blue-600 font-medium mb-2">Pertanyaan yang sering diajukan</p>
                    <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-6">
                        Temukan Solusi Untuk<br>
                        Permasalahan Anda.
                    </h2>
                </div>
                
                <!-- FAQ Accordion -->
                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200" onclick="toggleFaq(1)">
                            <span class="font-medium text-blue-900">Bagaimana cara kerjasama dengan Amins Project Teknologi Indonesia ?</span>
                            <svg class="w-5 h-5 text-blue-900 transform transition-transform duration-200" id="faq-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden" id="faq-content-1">
                            <p class="text-gray-600">
                                Cukup mudah untuk melakukan kerjasama dengan Amins Project Teknologi Indonesia, Cukup hubungi kontak customer service kami berikut ini lalu sampaikan apa yang menjadi kebutuhan anda.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200" onclick="toggleFaq(2)">
                            <span class="font-medium text-blue-900">Bagaimana cara untuk pemesanan produk barang ?</span>
                            <svg class="w-5 h-5 text-blue-900 transform transition-transform duration-200" id="faq-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden" id="faq-content-2">
                            <p class="text-gray-600">
                                Untuk pemesanan produk barang, Anda dapat menghubungi tim sales kami melalui kontak yang tersedia atau mengunjungi halaman shop di website kami.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200" onclick="toggleFaq(3)">
                            <span class="font-medium text-blue-900">Bagaimana cara untuk mengetahui daftar harga produk dan jasa ?</span>
                            <svg class="w-5 h-5 text-blue-900 transform transition-transform duration-200" id="faq-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden" id="faq-content-3">
                            <p class="text-gray-600">
                                Daftar harga produk dan jasa dapat Anda dapatkan dengan menghubungi customer service kami atau mengunjungi halaman layanan di website ini.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-sm">
                        <button class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 transition-colors duration-200" onclick="toggleFaq(4)">
                            <span class="font-medium text-blue-900">Bagaimana cara untuk meminta project proposal atau dokumen lainnya ?</span>
                            <svg class="w-5 h-5 text-blue-900 transform transition-transform duration-200" id="faq-icon-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden" id="faq-content-4">
                            <p class="text-gray-600">
                                Untuk meminta project proposal atau dokumen lainnya, silakan hubungi tim kami melalui kontak yang tersedia dengan menyertakan detail kebutuhan project Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Image -->
            <div class="relative">
                <img src="images/meet.jpg" 
                     alt="Team collaboration - FAQ section" 
                     class="w-full h-auto object-cover rounded-lg">
            </div>
        </div>
    </div>
</section>


<!-- Blog Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-16">
            <p class="text-blue-600 font-medium mb-2">Blog</p>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4">
                Informasi Yang Dikemas Secara Ringan
            </h2>
            <p class="text-gray-600 text-lg">
                Ayo sharing biar jadi bermanfaat
            </p>
        </div>

        @if($blogPosts->count() > 0)
        <!-- Blog Carousel Container -->
        <div class="relative overflow-hidden rounded-lg">
            <div class="blog-carousel-track flex transition-transform duration-500 ease-in-out" id="blog-carousel-track">
                @php
                    $chunkedPosts = $blogPosts->take(6)->chunk(3);
                @endphp
                
                @foreach($chunkedPosts as $slideIndex => $postsChunk)
                <!-- Slide {{ $slideIndex + 1 }} -->
                <div class="blog-carousel-slide w-full flex-shrink-0">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($postsChunk as $post)
                        <article class="blog-card group cursor-pointer" onclick="window.location.href='{{ route('blog.show', $post->slug) }}'">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3">
                                <!-- Featured Image -->
                                <div class="relative overflow-hidden">
                                    <div class="relative h-64">
                                        <!-- Background Image -->
                                        @if($post->featured_image)
                                            <img src="{{ asset('storage/' . $post->featured_image) }}" 
                                                 alt="{{ $post->title }}" 
                                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                                <svg class="w-16 h-16 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                                </svg>
                                            </div>
                                        @endif
                                        
                                        <!-- Light Overlay for Text Readability -->
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                        
                                        <!-- Date Badge -->
                                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-2 rounded-lg text-sm font-medium shadow-lg">
                                            <div class="text-center">
                                                <div class="text-lg font-bold">{{ $post->created_at->format('d') }}</div>
                                                <div class="text-xs">{{ $post->created_at->format('M') }}</div>
                                            </div>
                                        </div>
                                        
                                        <!-- Category Badge -->
                                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                                            {{ $post->category ?? 'General' }}
                                        </div>
                                        
                                        <!-- Title Overlay at Bottom -->
                                        <div class="absolute bottom-0 left-0 right-0 p-6">
                                            <h3 class="text-white text-xl font-bold leading-tight">
                                                {{ Str::limit($post->title, 60) }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Content -->
                                <div class="p-6">
                                    <!-- Meta Info -->
                                    <div class="flex items-center space-x-4 mb-4 text-sm text-gray-500">
                                        <div class="flex items-center space-x-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                            </svg>
                                            <span>{{ $post->author ?? 'Admin' }}</span>
                                        </div>
                                        <div class="flex items-center space-x-1">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            </svg>
                                            <span>{{ $post->created_at->format('M d, Y') }}</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Excerpt -->
                                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                        {{ Str::limit(strip_tags($post->content), 120) }}
                                    </p>
                                    
                                    <!-- Read More Link -->
                                    <div class="mt-4">
                                        <span class="text-blue-600 font-medium group-hover:text-blue-700 transition-colors duration-300">
                                            Baca Selengkapnya →
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Enhanced Carousel Dots -->
        <div class="flex justify-center space-x-3 mt-8">
            @if($blogPosts->count() > 0)
                @php
                    $totalSlides = ceil($blogPosts->take(6)->count() / 3);
                @endphp
                
                @for($i = 0; $i < $totalSlides; $i++)
                <button class="blog-carousel-dot w-3 h-3 rounded-full transition-all duration-500 ease-out {{ $i === 0 ? 'bg-blue-600 shadow-lg scale-110' : 'bg-gray-300 hover:bg-gray-400 shadow-sm' }}" 
                        onclick="goToBlogSlide({{ $i }})" 
                        id="blog-dot-{{ $i }}"
                        aria-label="Go to slide {{ $i + 1 }}">
                </button>
                @endfor
            @endif
        </div>

        @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="max-w-md mx-auto">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum Ada Artikel</h3>
                <p class="text-gray-500">Artikel blog akan ditampilkan di sini setelah dipublikasikan.</p>
            </div>
        </div>
        @endif

        <!-- Read More Button -->
        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" class="group bg-blue-900 hover:bg-blue-800 text-white px-10 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <span class="mr-3">Baca Selanjutnya</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
<script>
let currentBlogSlide = 0;
@if($blogPosts->count() > 0)
const totalBlogSlides = {{ ceil($blogPosts->take(6)->count() / 3) }};
@else
const totalBlogSlides = 0;
@endif
let blogAutoSlideInterval;

function updateBlogCarousel() {
    const track = document.getElementById('blog-carousel-track');
    if (!track || totalBlogSlides === 0) return;
    
    const translateX = -currentBlogSlide * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Enhanced dots animation
    for (let i = 0; i < totalBlogSlides; i++) {
        const dot = document.getElementById(`blog-dot-${i}`);
        if (dot) {
            if (i === currentBlogSlide) {
                dot.classList.remove('bg-gray-300', 'bg-gray-400', 'w-3', 'h-3', 'scale-100');
                dot.classList.add('bg-blue-600', 'w-10', 'h-3', 'shadow-lg', 'scale-110');
                dot.style.borderRadius = '9999px';
                dot.style.boxShadow = '0 4px 14px 0 rgba(37, 99, 235, 0.4)';
            } else {
                dot.classList.remove('bg-blue-600', 'w-10', 'h-3', 'shadow-lg', 'scale-110');
                dot.classList.add('bg-gray-300', 'w-3', 'h-3', 'scale-100');
                dot.style.borderRadius = '50%';
                dot.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1)';
            }
        }
    }
}

function nextBlogSlide() {
    if (totalBlogSlides === 0) return;
    currentBlogSlide = (currentBlogSlide + 1) % totalBlogSlides;
    updateBlogCarousel();
    resetBlogAutoSlide();
}

function goToBlogSlide(slideIndex) {
    if (slideIndex >= 0 && slideIndex < totalBlogSlides) {
        currentBlogSlide = slideIndex;
        updateBlogCarousel();
        resetBlogAutoSlide();
    }
}

function startBlogAutoSlide() {
    if (totalBlogSlides <= 1) return;
    blogAutoSlideInterval = setInterval(() => {
        nextBlogSlide();
    }, 6000); // Change slide every 6 seconds
}

function resetBlogAutoSlide() {
    clearInterval(blogAutoSlideInterval);
    startBlogAutoSlide();
}

// Initialize blog carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    if (totalBlogSlides > 0) {
        updateBlogCarousel();
        startBlogAutoSlide();
        
        // Pause auto-slide on hover over carousel
        const blogCarouselSection = document.getElementById('blog-carousel-track');
        if (blogCarouselSection) {
            const carouselContainer = blogCarouselSection.parentElement;
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(blogAutoSlideInterval);
            });
            
            carouselContainer.addEventListener('mouseleave', () => {
                startBlogAutoSlide();
            });
        }

        // Add click handlers for blog items
        const blogItems = document.querySelectorAll('.blog-card');
        blogItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                console.log(`Blog item ${index + 1} clicked`);
            });
        });
    }
});

// Enhanced dot hover animations
document.addEventListener('DOMContentLoaded', function() {
    const blogDots = document.querySelectorAll('.blog-carousel-dot');
    
    blogDots.forEach((dot, index) => {
        dot.addEventListener('mouseenter', function() {
            if (!this.classList.contains('bg-blue-600')) {
                this.style.transform = 'scale(1.2)';
                this.style.backgroundColor = '#6B7280';
                this.style.boxShadow = '0 2px 8px 0 rgba(107, 114, 128, 0.3)';
            }
        });
        
        dot.addEventListener('mouseleave', function() {
            if (!this.classList.contains('bg-blue-600')) {
                this.style.transform = 'scale(1)';
                this.style.backgroundColor = '#D1D5DB';
                this.style.boxShadow = '0 1px 3px 0 rgba(0, 0, 0, 0.1)';
            }
        });
        
        // Add click animation
        dot.addEventListener('click', function() {
            this.style.transform = 'scale(0.9)';
            setTimeout(() => {
                if (this.classList.contains('bg-blue-600')) {
                    this.style.transform = 'scale(1.1)';
                } else {
                    this.style.transform = 'scale(1)';
                }
            }, 150);
        });
    });
});
</script>

<style>
/* Blog Carousel Enhanced Dots Styles */
.blog-carousel-dot {
    cursor: pointer;
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: none;
    outline: none;
    position: relative;
    overflow: hidden;
}

.blog-carousel-dot:focus {
    outline: none;
    ring: 2px;
    ring-color: rgba(37, 99, 235, 0.5);
    ring-offset: 2px;
}

.blog-carousel-dot.bg-blue-600 {
    background: linear-gradient(135deg, #2563EB, #1D4ED8);
    animation: pulse-glow 2s infinite;
}

.blog-carousel-dot::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.3s ease;
}

.blog-carousel-dot:hover::before {
    width: 100%;
    height: 100%;
}

@keyframes pulse-glow {
    0%, 100% {
        box-shadow: 0 4px 14px 0 rgba(37, 99, 235, 0.4);
    }
    50% {
        box-shadow: 0 4px 20px 0 rgba(37, 99, 235, 0.6);
    }
}

/* Responsive adjustments for dots */
@media (max-width: 768px) {
    .blog-carousel-dot {
        width: 0.625rem;
        height: 0.625rem;
    }
    
    .blog-carousel-dot.bg-blue-600 {
        width: 2rem;
        height: 0.625rem;
    }
}

/* Enhanced Blog Carousel Track */
.blog-carousel-track {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.blog-carousel-slide {
    transition: opacity 0.3s ease-in-out;
}
</style>
<script>
let currentBlogSlide = 0;
const totalBlogSlides = {{ $chunkedPosts ? $chunkedPosts->count() : 0 }};
let blogAutoSlideInterval;

function updateBlogCarousel() {
    const track = document.getElementById('blog-carousel-track');
    if (!track) return;
    
    const translateX = -currentBlogSlide * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Enhanced dots animation
    for (let i = 0; i < totalBlogSlides; i++) {
        const dot = document.getElementById(`blog-dot-${i}`);
        if (dot) {
            if (i === currentBlogSlide) {
                dot.classList.remove('bg-gray-300', 'bg-gray-400', 'w-2', 'h-2');
                dot.classList.add('bg-blue-600', 'w-8', 'h-2', 'shadow-lg');
                dot.style.transform = 'scale(1)';
                dot.style.boxShadow = '0 0 0 3px rgba(37, 99, 235, 0.2)';
            } else {
                dot.classList.remove('bg-blue-600', 'w-8', 'h-2', 'shadow-lg');
                dot.classList.add('bg-gray-300', 'w-2', 'h-2');
                dot.style.transform = 'scale(1)';
                dot.style.boxShadow = 'none';
            }
        }
    }
}

function nextBlogSlide() {
    if (totalBlogSlides === 0) return;
    currentBlogSlide = (currentBlogSlide + 1) % totalBlogSlides;
    updateBlogCarousel();
    resetBlogAutoSlide();
}

function goToBlogSlide(slideIndex) {
    currentBlogSlide = slideIndex;
    updateBlogCarousel();
    resetBlogAutoSlide();
}

function startBlogAutoSlide() {
    if (totalBlogSlides <= 1) return;
    blogAutoSlideInterval = setInterval(() => {
        nextBlogSlide();
    }, 6000); // Change slide every 6 seconds
}

function resetBlogAutoSlide() {
    clearInterval(blogAutoSlideInterval);
    startBlogAutoSlide();
}

// Initialize blog carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    if (totalBlogSlides > 0) {
        updateBlogCarousel();
        startBlogAutoSlide();
        
        // Pause auto-slide on hover over carousel
        const blogCarouselSection = document.getElementById('blog-carousel-track');
        if (blogCarouselSection) {
            const carouselContainer = blogCarouselSection.parentElement;
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(blogAutoSlideInterval);
            });
            
            carouselContainer.addEventListener('mouseleave', () => {
                startBlogAutoSlide();
            });
        }

        // Add click handlers for blog items
        const blogItems = document.querySelectorAll('.blog-card');
        blogItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                console.log(`Blog item ${index + 1} clicked`);
            });
        });
    }
});

// Enhanced dot hover animations
document.addEventListener('DOMContentLoaded', function() {
    const blogDots = document.querySelectorAll('.blog-carousel-dot');
    
    blogDots.forEach((dot, index) => {
        dot.addEventListener('mouseenter', function() {
            if (!this.classList.contains('bg-blue-600')) {
                this.style.transform = 'scale(1.3)';
                this.style.backgroundColor = '#9CA3AF';
            }
        });
        
        dot.addEventListener('mouseleave', function() {
            if (!this.classList.contains('bg-blue-600')) {
                this.style.transform = 'scale(1)';
                this.style.backgroundColor = '#D1D5DB';
            }
        });
    });
});
</script>


<!-- Contact Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-start">
            <!-- Left side - Contact Form -->
            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <div class="mb-8">
                    <h3 class="text-sm font-medium text-blue-600 mb-2">Kontak Kami</h3>
                    <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-4">
                        Butuh Penawaran ? Tayakan<br>
                        Saja Kepada Kami...
                    </h2>
                </div>

                <form class="space-y-6" action="#" method="POST">
                    @csrf
                    <!-- Name and Phone Row -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <input type="text" 
                                   name="name" 
                                   placeholder="Name" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400">
                        </div>
                        <div>
                            <input type="tel" 
                                   name="phone" 
                                   placeholder="Phone" 
                                   required
                                   class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400">
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" 
                               name="email" 
                               placeholder="Email" 
                               required
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400">
                    </div>

                    <!-- Subject -->
                    <div>
                        <input type="text" 
                               name="subject" 
                               placeholder="Subject" 
                               required
                               class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400">
                    </div>

                    <!-- Message -->
                    <div>
                        <textarea name="message" 
                                  rows="6" 
                                  placeholder="Type Your Message" 
                                  required
                                  class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 placeholder-gray-400 resize-none"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" 
                                class="bg-blue-900 hover:bg-blue-800 text-white px-8 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right side - Benefits Section -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-sm font-medium text-blue-600 mb-2">Manfaat Bekerjasama</h3>
                    <h2 class="text-2xl lg:text-3xl font-bold text-blue-900 mb-4 leading-tight">
                        Kami Terus Berinovasi dan<br>
                        Berkolaborasi Untuk Mencapai<br>
                        Sebuah Tujuan.
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Jadilah saksi atas perjalanan kami untuk membangun bisnis ini dengan 
                        bekerjasama dengan kami, yakinlah kami akan berusaha sekuat tenaga 
                        dan pemikiran yang jernih demi tujuan yang baik.
                    </p>
                </div>

                <!-- Benefits Grid -->
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Amanah -->
                    <div class="benefit-card group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-800 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-blue-900 mb-2 group-hover:text-blue-800 transition-colors duration-300">
                                    Amanah
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                    Kami memegang teguh atas kepercayaan yang telah diberikan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Mutu -->
                    <div class="benefit-card group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-800 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-blue-900 mb-2 group-hover:text-blue-800 transition-colors duration-300">
                                    Mutu
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                    Kami terus berbenah untuk memberikan mutu produk serta pelayanan yang terbaik.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Iman -->
                    <div class="benefit-card group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-800 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-blue-900 mb-2 group-hover:text-blue-800 transition-colors duration-300">
                                    Iman
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                    Kami berpegang teguh atas keyakinan dan kepercayaan serta doa yang terus kita panjatkan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Nasionalis -->
                    <div class="benefit-card group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-900 rounded-lg flex items-center justify-center group-hover:bg-blue-800 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg font-bold text-blue-900 mb-2 group-hover:text-blue-800 transition-colors duration-300">
                                    Nasionalis
                                </h4>
                                <p class="text-gray-600 text-sm leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                    Kami terus berkolaborasi dan bersinergi dengan sesama rekan kerja untuk memajukan negara Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Blog Carousel Styles */
.blog-carousel {
    position: relative;
    overflow: hidden;
}

.blog-track {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.blog-slide {
    transition: opacity 0.3s ease-in-out;
}

/* Enhanced hover effects for benefit cards */
.benefit-card {
    position: relative;
    overflow: hidden;
}

.benefit-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(147, 51, 234, 0.05));
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.benefit-card:hover::before {
    opacity: 1;
}

.benefit-card > div {
    position: relative;
    z-index: 1;
}

/* Form input focus effects */
input:focus, textarea:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

/* Staggered animation for benefit cards */
.benefit-card:nth-child(1) { animation-delay: 0.1s; }
.benefit-card:nth-child(2) { animation-delay: 0.2s; }
.benefit-card:nth-child(3) { animation-delay: 0.3s; }
.benefit-card:nth-child(4) { animation-delay: 0.4s; }

/* Loading animation */
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

.benefit-card {
    animation: fadeInUp 0.6s ease-out forwards;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .benefit-card {
        padding: 1rem;
    }
    
    .benefit-card h4 {
        font-size: 1rem;
    }
    
    .benefit-card .w-12 {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .benefit-card svg {
        width: 1.25rem;
        height: 1.25rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form submission handling
    const form = document.querySelector('form');
    const submitButton = form.querySelector('button[type="submit"]');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Add loading state
        const originalText = submitButton.textContent;
        submitButton.textContent = 'Sending...';
        submitButton.disabled = true;
        
        // Simulate form submission (replace with actual form handling)
        setTimeout(() => {
            alert('Pesan berhasil dikirim! Kami akan segera menghubungi Anda.');
            form.reset();
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        }, 2000);
    });
    
    // Enhanced form validation
    const inputs = form.querySelectorAll('input, textarea');
    
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.hasAttribute('required') && !this.value.trim()) {
                this.classList.add('border-red-300');
                this.classList.remove('border-gray-200');
            } else {
                this.classList.remove('border-red-300');
                this.classList.add('border-gray-200');
            }
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('border-red-300') && this.value.trim()) {
                this.classList.remove('border-red-300');
                this.classList.add('border-gray-200');
            }
        });
    });
    
    // Phone number formatting
    const phoneInput = form.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('0')) {
                value = '+62' + value.substring(1);
            } else if (!value.startsWith('+62')) {
                value = '+62' + value;
            }
            e.target.value = value;
        });
    }
});
</script>

<!-- Blog Carousel JavaScript -->
<script>
let currentBlogSlide = 0;
const totalBlogSlides = 2;
let blogAutoSlideInterval;

function updateBlogCarousel() {
    const track = document.getElementById('blog-carousel-track');
    const translateX = -currentBlogSlide * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Update dots
    for (let i = 0; i < totalBlogSlides; i++) {
        const dot = document.getElementById(`blog-dot-${i}`);
        if (dot) {
            if (i === currentBlogSlide) {
                dot.classList.remove('bg-gray-300', 'bg-gray-400');
                dot.classList.add('bg-yellow-400', 'scale-125');
            } else {
                dot.classList.remove('bg-yellow-400', 'scale-125');
                dot.classList.add('bg-gray-300');
            }
        }
    }
}

function nextBlogSlide() {
    currentBlogSlide = (currentBlogSlide + 1) % totalBlogSlides;
    updateBlogCarousel();
    resetBlogAutoSlide();
}

function goToBlogSlide(index) {
    currentBlogSlide = index;
    updateBlogCarousel();
    resetBlogAutoSlide();
}

function startBlogAutoSlide() {
    blogAutoSlideInterval = setInterval(() => {
        nextBlogSlide();
    }, 5000);
}

function resetBlogAutoSlide() {
    clearInterval(blogAutoSlideInterval);
    startBlogAutoSlide();
}

// Initialize blog carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    updateBlogCarousel();
    startBlogAutoSlide();
    
    // Pause auto-slide on hover
    const blogCarouselSection = document.querySelector('.blog-carousel');
    blogCarouselSection.addEventListener('mouseenter', () => {
        clearInterval(blogAutoSlideInterval);
    });
    
    blogCarouselSection.addEventListener('mouseleave', () => {
        startBlogAutoSlide();
    });

    // Add click handlers for blog cards
    const blogCards = document.querySelectorAll('.blog-card');
    blogCards.forEach((card, index) => {
        card.addEventListener('click', function() {
            console.log(`Blog post ${index + 1} clicked`);
        });
    });
});
</script>

<style>
/* Blog Carousel Styles */
.blog-carousel {
    position: relative;
    overflow: hidden;
}

.blog-track {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.blog-slide {
    transition: opacity 0.3s ease-in-out;
}

/* Blog Card Hover Effects */
.blog-card {
    transition: all 0.3s ease-in-out;
}

.blog-card:hover {
    transform: translateY(-5px);
}

.blog-card .bg-white {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.blog-card:hover .bg-white {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Image Hover Effects */
.blog-card img {
    transition: transform 0.5s ease-out;
}

.blog-card:hover img {
    transform: scale(1.1);
}

/* Date Badge Animation */
.blog-card .absolute.top-4.right-4 {
    transition: all 0.3s ease-in-out;
}

.blog-card:hover .absolute.top-4.right-4 {
    transform: scale(1.05);
}

/* Category Badge Animation */
.blog-card .absolute.top-4.left-4 {
    transition: all 0.3s ease-in-out;
}

.blog-card:hover .absolute.top-4.left-4 {
    transform: scale(1.05);
}

/* Dot Styles */
.blog-dot {
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.blog-dot:hover {
    transform: scale(1.2);
}

.blog-dot.bg-yellow-400 {
    box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.3);
}

/* Staggered Animation for Blog Cards */
.blog-card:nth-child(1) { animation-delay: 0.1s; }
.blog-card:nth-child(2) { animation-delay: 0.2s; }
.blog-card:nth-child(3) { animation-delay: 0.3s; }

/* Loading Animation */
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

.blog-card {
    animation: fadeInUp 0.6s ease-out forwards;
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-slide .grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .blog-card .p-6 {
        padding: 1.5rem;
    }
    
    .blog-card h3 {
        font-size: 1.125rem;
    }
    
    .relative.h-64 {
        height: 200px;
    }
}

/* Enhanced Button Hover */
.blog-card .bg-white::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(147, 51, 234, 0.05));
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    pointer-events: none;
}

.blog-card:hover .bg-white::before {
    opacity: 1;
}
</style>

<!-- Testimonial Carousel JavaScript -->
<script>
let currentTestimonial = 0;
const totalTestimonials = 3;
let testimonialAutoSlideInterval;

function updateTestimonialCarousel() {
    const track = document.getElementById('testimonial-track');
    const translateX = -currentTestimonial * 100;
    track.style.transform = `translateX(${translateX}%)`;
    
    // Update indicators
    for (let i = 0; i < totalTestimonials; i++) {
        const indicator = document.getElementById(`testimonial-indicator-${i}`);
        if (indicator) {
            if (i === currentTestimonial) {
                indicator.classList.remove('bg-gray-300');
                indicator.classList.add('bg-blue-900', 'scale-125');
            } else {
                indicator.classList.remove('bg-blue-900', 'scale-125');
                indicator.classList.add('bg-gray-300');
            }
        }
    }
}

function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
    updateTestimonialCarousel();
    resetTestimonialAutoSlide();
}

function previousTestimonial() {
    currentTestimonial = (currentTestimonial - 1 + totalTestimonials) % totalTestimonials;
    updateTestimonialCarousel();
    resetTestimonialAutoSlide();
}

function goToTestimonial(index) {
    currentTestimonial = index;
    updateTestimonialCarousel();
    resetTestimonialAutoSlide();
}

function startTestimonialAutoSlide() {
    testimonialAutoSlideInterval = setInterval(() => {
        nextTestimonial();
    }, 6000); // Change slide every 6 seconds
}

function resetTestimonialAutoSlide() {
    clearInterval(testimonialAutoSlideInterval);
    startTestimonialAutoSlide();
}

// Initialize testimonial carousel when page loads
document.addEventListener('DOMContentLoaded', function() {
    updateTestimonialCarousel();
    startTestimonialAutoSlide();
    
    // Pause auto-slide on hover
    const testimonialSection = document.querySelector('.testimonial-carousel');
    testimonialSection.addEventListener('mouseenter', () => {
        clearInterval(testimonialAutoSlideInterval);
    });
    
    testimonialSection.addEventListener('mouseleave', () => {
        startTestimonialAutoSlide();
    });
});

// Enhanced button hover effects
document.addEventListener('DOMContentLoaded', function() {
    const navButtons = document.querySelectorAll('.testimonial-nav-btn');
    
    navButtons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 10px 25px rgba(30, 58, 138, 0.3)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        });
    });
});
</script>

<style>
/* Testimonial Carousel Styles */
.testimonial-carousel {
    position: relative;
    overflow: hidden;
}

.testimonial-track {
    transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.testimonial-slide {
    transition: opacity 0.3s ease-in-out;
}

/* Navigation Button Styles */
.testimonial-nav-btn {
    position: relative;
    overflow: hidden;
}

.testimonial-nav-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.testimonial-nav-btn:hover::before {
    left: 100%;
}

/* Indicator Styles */
.testimonial-indicator {
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.testimonial-indicator:hover {
    transform: scale(1.2);
    background-color: #1e40af;
}

/* Profile Image Animation */
.testimonial-slide img {
    transition: transform 0.3s ease-in-out;
}

.testimonial-slide:hover img {
    transform: scale(1.05);
}

/* Card Hover Effects */
.testimonial-slide .bg-white {
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
}

.testimonial-slide .bg-white::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.05), rgba(147, 51, 234, 0.05));
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.testimonial-slide .bg-white:hover::before {
    opacity: 1;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .testimonial-slide .flex {
        flex-direction: column;
        text-align: center;
    }
    
    .testimonial-slide .flex-shrink-0 {
        align-self: center;
        margin-bottom: 1rem;
    }
}

@media (max-width: 768px) {
    .testimonial-slide .bg-white {
        padding: 1.5rem;
    }
    
    .testimonial-nav-btn {
        padding: 0.75rem;
    }
    
    .testimonial-nav-btn svg {
        width: 1rem;
        height: 1rem;
    }
}

/* Star Rating Animation */
.testimonial-slide svg {
    transition: transform 0.2s ease-in-out;
}

.testimonial-slide:hover svg {
    transform: scale(1.1);
}
</style>

<script>
function toggleFaq(index) {
    const content = document.getElementById(`faq-content-${index}`);
    const icon = document.getElementById(`faq-icon-${index}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>

<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.remove("hidden");
        } else {
            scrollToTopBtn.classList.add("hidden");
        }
    });

    scrollToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>


@endsection
