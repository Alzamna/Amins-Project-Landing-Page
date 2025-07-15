<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title')@yield('title') – @endif{{ config('title', 'Amins Project Teknologi Indonesia') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue': {
                            900: '#1e3a8a',
                            800: '#1e40af',
                            700: '#1d4ed8',
                            600: '#2563eb',
                        },
                        'orange': {
                            500: '#f97316',
                            400: '#fb923c',
                        }
                    },
                    fontFamily: {
                        poppins: ['poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="font-poppins antialiased" >
    <!-- Page Loader -->
    <div id="loader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="relative">
            <div class="w-20 h-20 border-4 border-orange-500 rounded-full animate-spin border-t-transparent"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="{{ asset('images/logo-aminsproject.png') }}" alt="AMINS PROJECT" class="w-10 h-10 object-contain">
            </div>
        </div>
    </div>
    <header id="sticky-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-4">
        <!-- Main navigation -->
        <div id="main-nav" class="flex items-center justify-between transition-all duration-300 ease-in-out py-4 lg:py-6">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/logo-aminsproject.png') }}" alt="Amins Project Logo" class="h-12 lg:h-16 w-auto">
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center justify-center flex-1">
                <div class="flex items-center space-x-8 xl:space-x-10 2xl:space-x-12">
                    <a href="{{ route('home') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('home') ? 'text-orange-500' : 'text-white' }}">
                        Home
                    </a>
                    <a href="{{ route('tentang') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('tentang') ? 'text-orange-500' : 'text-white' }}">
                        About
                    </a>
                    <a href="{{ route('services') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('services') ? 'text-orange-500' : 'text-white' }}">
                        Service
                    </a>
                    <a href="{{ route('portofolio') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('portofolio') ? 'text-orange-500' : 'text-white' }}">
                        Portfolio
                    </a>
                    <a href="{{ route('blog') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('blog') ? 'text-orange-500' : 'text-white' }}">
                        Blog
                    </a>
                    <a href="{{ route('shop') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('shop') ? 'text-orange-500' : 'text-white' }}">
                        Shop
                    </a>
                    <a href="{{ route('contact') }}" class="nav-link font-semibold text-base xl:text-lg hover:text-orange-500 transition-all duration-200 whitespace-nowrap relative {{ request()->routeIs('contact') ? 'text-orange-500' : 'text-white' }}">
                        Contact
                    </a>
                </div>
            </nav>

            <!-- Login Button -->
            <div class="hidden lg:flex items-center">
                <a href="https://wa.me/6289537980511"
                    class="login-btn bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg text-base font-semibold transition-all duration-300 whitespace-nowrap hover:scale-105 hover:shadow-lg border-2 border-orange-500 hover:border-orange-600">
                    Konsultasi Gratis
                </a>
            </div>

            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="lg:hidden flex items-center justify-center p-2 rounded-lg text-white hover:text-orange-500 hover:bg-white/10 transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2" aria-label="Toggle mobile menu">
                <svg id="menu-icon" class="h-6 w-6 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="h-6 w-6 hidden transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden transition-all duration-300 ease-in-out overflow-hidden max-h-0 opacity-0 bg-white/95 backdrop-blur-md border-t border-white/20 rounded-b-2xl">
            <nav class="px-4 py-6 space-y-2">
                <a href="{{ route('home') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('home') ? 'text-orange-500 bg-orange-50' : 'text-blue-900' }}">
                    Home
                </a>
                <a href="{{ route('tentang') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('tentang') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    About
                </a>
                <a href="{{ route('services') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('services') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    Service
                </a>
                <a href="{{ route('portofolio') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('portofolio') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    Portfolio
                </a>
                <a href="{{ route('blog') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('blog') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    Blog
                </a>
                <a href="{{ route('shop') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('shop') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    Shop
                </a>
                <a href="{{ route('contact') }}" class="mobile-nav-link block px-4 py-3 font-semibold text-center rounded-lg hover:bg-orange-50 hover:text-orange-500 transition-all duration-200 {{ request()->routeIs('contact') ? 'text-orange-500 bg-orange-50' : 'text-gray-700' }}">
                    Contact
                </a>
                
                <!-- Mobile Login Button -->
                <div class="pt-4 mt-4 border-t border-gray-200">
                    <a href="{{ route('login') }}" class="block w-full bg-orange-500 hover:bg-orange-600 text-white text-center px-4 py-3 rounded-lg font-semibold transition-all duration-200 hover:scale-105">
                        Login
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden opacity-0 pointer-events-none transition-opacity duration-300"></div>

<style>
/* Enhanced Navigation Styles */
.nav-link {
    position: relative;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 50%;
    width: 0;
    height: 2px;
    background-color: #f97316;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.nav-link:hover::after,
.nav-link.text-orange-500::after {
    width: 100%;
}

/* Header Background States */
#sticky-header {
    background: transparent;
    backdrop-filter: none;
}

#sticky-header.header-scrolled {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Navigation Link Colors for Scrolled State */
#sticky-header.header-scrolled .nav-link {
    color: #1e3a8a !important;
}

#sticky-header.header-scrolled .nav-link.text-orange-500 {
    color: #f97316 !important;
}

#sticky-header.header-scrolled .nav-link:hover {
    color: #f97316 !important;
}

/* Mobile Menu Button Color for Scrolled State */
#sticky-header.header-scrolled #mobile-menu-button {
    color: #1e3a8a;
}

#sticky-header.header-scrolled #mobile-menu-button:hover {
    color: #f97316;
    background-color: rgba(249, 115, 22, 0.1);
}

/* Login Button Styles */
.login-btn {
    position: relative;
    overflow: hidden;
}

.login-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.login-btn:hover::before {
    left: 100%;
}

/* Scrolled state login button */
#sticky-header.header-scrolled .login-btn {
    background-color: #f97316;
    border-color: #f97316;
}

#sticky-header.header-scrolled .login-btn:hover {
    background-color: #ea580c;
    border-color: #ea580c;
}

/* Mobile Navigation Animation */
.mobile-nav-link {
    transform: translateX(-20px);
    opacity: 0;
    animation: slideInLeft 0.3s ease forwards;
}

.mobile-nav-link:nth-child(1) { animation-delay: 0.1s; }
.mobile-nav-link:nth-child(2) { animation-delay: 0.15s; }
.mobile-nav-link:nth-child(3) { animation-delay: 0.2s; }
.mobile-nav-link:nth-child(4) { animation-delay: 0.25s; }
.mobile-nav-link:nth-child(5) { animation-delay: 0.3s; }
.mobile-nav-link:nth-child(6) { animation-delay: 0.35s; }
.mobile-nav-link:nth-child(7) { animation-delay: 0.4s; }

@keyframes slideInLeft {
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

/* Smooth scrolling for anchor links */
html {
    scroll-behavior: smooth;
}

/* Enhanced mobile menu button animation */
#mobile-menu-button:hover #menu-icon,
#mobile-menu-button:hover #close-icon {
    transform: scale(1.1);
}

/* Mobile menu backdrop blur effect */
@supports (backdrop-filter: blur(10px)) {
    #mobile-menu {
        backdrop-filter: blur(15px);
    }
}

/* Responsive adjustments */
@media (max-width: 1280px) {
    .nav-link {
        font-size: 0.95rem;
    }
}

@media (max-width: 1024px) {
    .nav-link {
        font-size: 0.9rem;
    }
}

/* Logo transition for scrolled state */
#sticky-header img {
    transition: all 0.3s ease;
}

#sticky-header.header-scrolled img {
    height: 3rem; /* h-12 */
}

@media (min-width: 1024px) {
    #sticky-header.header-scrolled img {
        height: 3.5rem; /* h-14 */
    }
}

/* Utility class for content spacing */
.header-offset {
    padding-top: 6rem; /* Reduced since we removed top bar */
}

@media (min-width: 1024px) {
    .header-offset {
        padding-top: 7rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('sticky-header');
    const mainNav = document.getElementById('main-nav');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    let isScrolled = false;
    let isMobileMenuOpen = false;
    let scrollTimeout;

    // Function to calculate and update header height
    function updateHeaderHeight() {
        const headerHeight = header.offsetHeight;
        document.documentElement.style.setProperty('--header-height', `${headerHeight}px`);
    }

    // Throttled scroll handler for better performance
    function handleScroll() {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const shouldBeScrolled = scrollTop > 50;

            if (shouldBeScrolled !== isScrolled) {
                isScrolled = shouldBeScrolled;
                
                if (isScrolled) {
                    // Add scrolled state
                    header.classList.add('header-scrolled');
                    
                    // Adjust main nav padding
                    mainNav.classList.add('py-3', 'lg:py-4');
                    mainNav.classList.remove('py-4', 'lg:py-6');
                } else {
                    // Remove scrolled state
                    header.classList.remove('header-scrolled');
                    
                    // Reset main nav padding
                    mainNav.classList.add('py-4', 'lg:py-6');
                    mainNav.classList.remove('py-3', 'lg:py-4');
                }
                
                // Update header height after state change
                setTimeout(updateHeaderHeight, 350);
            }
        }, 10);
    }

    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;
        
        if (isMobileMenuOpen) {
            // Open mobile menu
            mobileMenu.classList.add('max-h-screen', 'opacity-100');
            mobileMenu.classList.remove('max-h-0', 'opacity-0');
            
            // Show overlay
            mobileOverlay.classList.add('opacity-100');
            mobileOverlay.classList.remove('pointer-events-none');
            
            // Switch icons
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            
            // Prevent body scroll
            document.body.style.overflow = 'hidden';
            
            // Add animation to menu items
            const mobileLinks = mobileMenu.querySelectorAll('.mobile-nav-link');
            mobileLinks.forEach((link, index) => {
                link.style.animationDelay = `${(index + 1) * 0.05}s`;
            });
        } else {
            // Close mobile menu
            mobileMenu.classList.add('max-h-0', 'opacity-0');
            mobileMenu.classList.remove('max-h-screen', 'opacity-100');
            
            // Hide overlay
            mobileOverlay.classList.add('pointer-events-none');
            mobileOverlay.classList.remove('opacity-100');
            
            // Switch icons
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            
            // Restore body scroll
            document.body.style.overflow = '';
        }
        
        // Update header height after menu toggle
        setTimeout(updateHeaderHeight, 350);
    }

    // Event listeners
    window.addEventListener('scroll', handleScroll, { passive: true });
    window.addEventListener('resize', () => {
        updateHeaderHeight();
        if (window.innerWidth >= 1024 && isMobileMenuOpen) {
            toggleMobileMenu();
        }
    });
    
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', toggleMobileMenu);
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', () => {
            if (isMobileMenuOpen) {
                toggleMobileMenu();
            }
        });
    }

    // Close mobile menu when clicking on links
    const mobileLinks = mobileMenu?.querySelectorAll('a') || [];
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (isMobileMenuOpen) {
                toggleMobileMenu();
            }
        });
    });

    // Handle escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMobileMenuOpen) {
            toggleMobileMenu();
        }
    });

    // Initialize
    updateHeaderHeight();
    handleScroll();
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = header.offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>
    <!-- Scroll to Top Button -->
<button id="scrollToTopBtn"
    class="fixed bottom-6 right-6 z-50 w-12 h-12 rounded-full bg-blue-900 text-white flex items-center justify-center shadow-lg hover:bg-blue-800 transition-all duration-300 opacity-0 pointer-events-none transform translate-y-4">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7M5 21l7-7 7 7" />
    </svg>
</button>

<!-- Hero Section -->
<section id="hero" class="relative overflow-hidden min-h-screen flex items-center font-poppins">
    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-900 via-blue-800 to-blue-700"></div>
    
    <!-- Geometric Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -right-20 w-80 h-80 bg-blue-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute top-1/2 -right-10 w-60 h-60 bg-blue-500/15 rounded-full blur-2xl animate-float-slow"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-800/25 rounded-full blur-xl animate-float"></div>
        <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-r from-blue-400/10 to-blue-600/10 rounded-full blur-xl animate-float-delayed"></div>
        <div class="absolute bottom-1/4 left-1/4 w-24 h-24 bg-gradient-to-r from-blue-700/15 to-blue-500/15 rounded-full blur-lg animate-pulse-slow"></div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
            <!-- Left Content -->
            <div class="space-y-8 text-white" data-aos="fade-right" data-aos-duration="1000">
                <div class="space-y-4 mt-14 ">
                    <h1 class="hero-title text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight animate-slide-up">
                        Start Project From
                    </h1>
                    <h2 class="hero-subtitle text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight text-orange-300 animate-slide-up-delayed">
                        The Heart
                    </h2>
                </div>

                <p class="text-blue-100 text-lg lg:text-xl leading-relaxed max-w-2xl animate-fade-in-delayed">
                    Spesialis layanan IT yang menangani berbagai kebutuhan bisnis, industri, dan e-commerce. 
                    Mulai dari pengembangan website, aplikasi, jaringan, keamanan, hingga solusi teknologi lainnya. 
                    <span class="font-semibold text-white">Gratis konsultasi dan dukungan pemeliharaan berkelanjutan</span>.
                </p>



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
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-96 h-96 bg-gradient-to-br from-blue-400/20 to-blue-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
                </div>
                
                <div class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-80 animate-float shadow-lg pointer-events-none"></div>
                <div class="absolute top-20 right-16 w-16 h-16 bg-gradient-to-br from-blue-300 to-blue-400 rounded-2xl opacity-70 animate-float-delayed shadow-lg pointer-events-none"></div>
                <div class="absolute bottom-20 left-16 w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full opacity-60 animate-float-slow shadow-lg pointer-events-none"></div>
                <div class="absolute bottom-32 right-8 w-14 h-14 bg-gradient-to-br from-blue-200 to-blue-300 rounded-2xl opacity-75 animate-float shadow-lg pointer-events-none"></div>

                <div class="relative z-10 max-w-md mx-auto lg:max-w-lg mt-8">
                    <div class="relative">
                        <img src="{{ asset('images/intro.png') }}" 
                             alt="Professional Developer" 
                             class="w-full h-auto object-cover rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent rounded-2xl"></div>
                    </div>
                    
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

<!-- About Us Section -->
<section class="py-20 bg-white overflow-hidden relative">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-900 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-orange-400 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 pointer-events-none">
                    <div class="absolute top-0 left-20 w-64 h-64 bg-gradient-to-br from-orange-400 to-orange-500 rounded-full opacity-90 animate-float"></div>
                    <div class="absolute top-8 left-20 w-48 h-48 bg-gradient-to-br from-blue-900 to-blue-800 rounded-full animate-float-delayed"></div>
                    <div class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-300 to-orange-400 rounded-full opacity-70 animate-float-slow"></div>
                    <div class="absolute top-16 right-16 w-16 h-16 bg-gradient-to-br from-blue-800 to-blue-900 rounded-full animate-pulse"></div>
                    <div class="absolute top-12 left-32 w-4 h-4 bg-yellow-400 rounded-full animate-bounce-slow"></div>
                    <div class="absolute bottom-12 left-12 w-6 h-6 bg-yellow-400 rounded-full animate-bounce-delayed"></div>
                    <div class="absolute top-32 right-8 w-4 h-4 bg-yellow-400 rounded-full animate-bounce-slow"></div>
                    <div class="absolute top-24 left-8 w-8 h-8 bg-blue-200 transform rotate-45 animate-spin-slow"></div>
                    <div class="absolute bottom-24 right-24 w-6 h-6 bg-orange-200 transform rotate-45 animate-spin-reverse"></div>
                </div>
                
                <div class="relative z-10 flex justify-end group">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl group-hover:shadow-3xl transition-all duration-500">
                        <img src="{{ asset('images/aboutus.png') }}" 
                             alt="Professional man with laptop - About Amins Project" 
                             class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                    </div>
                </div>
            </div>
            
            <div class="space-y-8 order-1 lg:order-2">
                <div class="space-y-6">
                    <div class="inline-block">
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-0.5 bg-gradient-to-r from-blue-600 to-orange-400"></div>
                            <p class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Tentang Kami</p>
                            <div class="w-12 h-0.5 bg-gradient-to-r from-orange-400 to-blue-600"></div>
                        </div>
                    </div>
                    
                    <h2 class="text-3xl lg:text-5xl font-bold text-blue-900 mb-4 leading-tight">
                        <span class="inline-block animate-fade-in-up bg-gradient-to-r from-blue-900 to-blue-700 bg-clip-text text-transparent">AMINS PROJECT</span><br>
                        <span class="inline-block animate-fade-in-up animation-delay-200 bg-gradient-to-r from-orange-500 to-orange-600 bg-clip-text text-transparent">TEKNOLOGI INDONESIA</span>
                    </h2>
                </div>
                
                <div class="space-y-6">
                    <p class="text-gray-600 leading-relaxed text-lg animate-fade-in-up animation-delay-400 relative">
                        <span class="absolute -left-4 top-0 w-1 h-full bg-gradient-to-b from-blue-600 to-orange-400 rounded-full"></span>
                        Amin's Project Teknologi Indonesia adalah sebuah bisnis yang bergerak dalam bidang <span class="font-semibold text-blue-900">Software Developer</span>, <span class="font-semibold text-blue-900">Riset Teknologi</span>, Teknologi Informasi, Penjualan Perangkat Teknologi dan Multimedia Digital Creative yang berdiri pada tahun <span class="font-bold text-orange-600">2015</span>.
                    </p>
                    
                    <p class="text-gray-600 leading-relaxed animate-fade-in-up animation-delay-600">
                        Seluruh bidang yang telah kami kerjakan dikemas dengan kreatif, ringan, namun sangat membantu dalam pengembangan bisnis serta perusahaan anda. Kami berkomitmen memberikan <span class="font-semibold text-blue-900">pelayanan sebaik mungkin</span> demi hasil yang memuaskan.
                    </p>
                </div>
                
                <div class="grid grid-cols-3 gap-6 py-8 animate-fade-in-up animation-delay-800">
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-4 group-hover:shadow-lg transition-all duration-300">
                            <div class="text-3xl font-bold text-blue-900 counter" data-target="2015">0</div>
                            <div class="text-sm text-gray-600 font-medium">Berdiri Sejak</div>
                        </div>
                    </div>
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-4 group-hover:shadow-lg transition-all duration-300">
                            <div class="text-3xl font-bold text-orange-600 counter" data-target="100">0</div>
                            <div class="text-sm text-gray-600 font-medium">Project Selesai</div>
                        </div>
                    </div>
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-4 group-hover:shadow-lg transition-all duration-300">
                            <div class="text-3xl font-bold text-green-600 counter" data-target="50">0</div>
                            <div class="text-sm text-gray-600 font-medium">Client Puas</div>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up animation-delay-1000">
                    <a href="{{ route('tentang') }}" class="group bg-gradient-to-r from-blue-900 to-blue-800 hover:from-blue-800 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-medium transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="mr-2 relative z-10">Selengkapnya</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    
                    <a href="tel:+6289537980511" class="group bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-8 py-4 rounded-xl font-medium transition-all duration-300 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <svg class="w-5 h-5 mr-3 animate-pulse relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div class="text-left relative z-10">
                            <div class="font-semibold">Kontak Kami</div>
                            <div class="text-sm opacity-90">+62 895-3798-0511</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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




<!-- Enhanced Custom Animations CSS -->
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

/* Enhanced shadows */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Ensure proper scrolling */
body {
    overflow-x: hidden;
    overflow-y: auto;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .animate-float,
    .animate-float-delayed,
    .animate-float-slow {
        animation-duration: 4s;
    }
    
    /* Reduce background elements on mobile */
    .absolute.inset-0.pointer-events-none > div {
        transform: scale(0.7);
    }
}

/* Performance optimizations */
.animate-float,
.animate-float-delayed,
.animate-float-slow,
.animate-bounce-slow,
.animate-bounce-delayed {
    will-change: transform;
    backface-visibility: hidden;
}
</style>

<!-- Enhanced JavaScript for Counter Animation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation with improved performance
    const counters = document.querySelectorAll('.counter');
    
    const animateCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const start = performance.now();
        
        const updateCounter = (currentTime) => {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(target * easeOutQuart);
            
            counter.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        requestAnimationFrame(updateCounter);
    };
    
    // Intersection Observer for counter animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                // Add a small delay for staggered effect
                setTimeout(() => {
                    animateCounter(counter);
                }, Array.from(counters).indexOf(counter) * 200);
                observer.unobserve(counter);
            }
        });
    }, {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    });
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
    
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<!-- Transition from About to Services -->
<div class="relative">
    <!-- Enhanced Gradient Background -->
    {{-- <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-100 to-blue-900 h-48 -mt-24 z-10"></div> --}}
    
    <!-- Multiple Wave Layers for Natural Effect -->
    <!-- Wave Layer 1 - Background -->
    {{-- <svg class="absolute top-0 left-0 w-full h-40 -mt-20 z-20" viewBox="0 0 1440 200" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,80 C240,120 480,40 720,80 C960,120 1200,40 1440,80 L1440,200 L0,200 Z" fill="#1e3a8a" fill-opacity="0.3"/>
    </svg> --}}
    
    {{-- <!-- Wave Layer 2 - Middle -->
    <svg class="absolute top-0 left-0 w-full h-36 -mt-18 z-25" viewBox="0 0 1440 180" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,60 C360,100 720,20 1080,60 C1260,80 1350,70 1440,60 L1440,180 L0,180 Z" fill="#1e3a8a" fill-opacity="0.6"/>
    </svg> --}}
    
    <!-- Wave Layer 3 - Foreground -->
    <svg class="absolute top-0 left-0 w-full h-32 -mt-16 z-30" viewBox="0 0 1440 160" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,40 C480,80 960,0 1440,40 L1440,160 L0,160 Z" fill="#1e3a8a"/>
    </svg>
    
    <!-- Additional Smooth Wave for Extra Fluidity -->
    <svg class="absolute top-0 left-0 w-full h-28 -mt-14 z-35" viewBox="0 0 1440 140" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,20 Q360,60 720,40 T1440,20 L1440,140 L0,140 Z" fill="#1e40af" fill-opacity="0.8"/>
    </svg>
</div>

{{-- <!-- Alternative Single Wave Version (More Fluid) -->
<div class="relative">
    <!-- Enhanced Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-100 to-blue-900 h-40 -mt-20 z-10"></div>
    
    <!-- Single Large Fluid Wave -->
    <svg class="absolute top-0 left-0 w-full h-32 -mt-16 z-20" viewBox="0 0 1440 160" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <!-- Main Wave -->
        <path d="M0,32 C240,72 480,8 720,32 C960,56 1200,8 1440,32 L1440,160 L0,160 Z" fill="#1e3a8a"/>
        
        <!-- Secondary Wave for Depth -->
        <path d="M0,48 C360,88 720,24 1080,48 C1260,64 1350,56 1440,48 L1440,160 L0,160 Z" fill="#1e40af" fill-opacity="0.7"/>
        
        <!-- Tertiary Wave for Smoothness -->
        <path d="M0,64 C480,96 960,32 1440,64 L1440,160 L0,160 Z" fill="#1d4ed8" fill-opacity="0.5"/>
    </svg>
</div> --}}

<!-- Most Natural Version with Bezier Curves -->
<div class="relative overflow-hidden">
    <!-- Smooth Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-white via-blue-50 via-blue-200 to-blue-900 h-40 -mt-20 z-10"></div>
    
    <!-- Natural Wave with Bezier Curves -->
    <svg class="absolute top-0 left-0 w-full h-36 -mt-18 z-20" viewBox="0 0 1440 180" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <!-- Background Wave -->
        <path d="M0,60 C120,100 240,20 360,60 C480,100 600,20 720,60 C840,100 960,20 1080,60 C1200,100 1320,20 1440,60 L1440,180 L0,180 Z" 
              fill="#1e3a8a" fill-opacity="0.4"/>
        
        <!-- Middle Wave -->
        <path d="M0,80 C180,120 360,40 540,80 C720,120 900,40 1080,80 C1260,120 1350,60 1440,80 L1440,180 L0,180 Z" 
              fill="#1e40af" fill-opacity="0.7"/>
        
        <!-- Foreground Wave -->
        <path d="M0,100 C240,140 480,60 720,100 C960,140 1200,60 1440,100 L1440,180 L0,180 Z" 
              fill="#1d4ed8"/>
    </svg>
    
    <!-- Animated Wave Overlay -->
    <svg class="absolute top-0 left-0 w-full h-32 -mt-16 z-25 animate-wave" viewBox="0 0 1440 160" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <path d="M0,120 C360,160 720,80 1080,120 C1260,140 1350,130 1440,120 L1440,160 L0,160 Z" 
              fill="#2563eb" fill-opacity="0.6"/>
    </svg>
</div>

<style>
/* Wave Animation for Natural Movement */
@keyframes wave {
    0% {
        transform: translateX(0) translateY(0);
    }
    50% {
        transform: translateX(-25px) translateY(-5px);
    }
    100% {
        transform: translateX(0) translateY(0);
    }
}

.animate-wave {
    animation: wave 6s ease-in-out infinite;
}

/* Alternative Wave Animation */
@keyframes wave-flow {
    0%, 100% {
        clip-path: polygon(
            0% 80%, 
            10% 85%, 
            20% 75%, 
            30% 85%, 
            40% 75%, 
            50% 85%, 
            60% 75%, 
            70% 85%, 
            80% 75%, 
            90% 85%, 
            100% 80%, 
            100% 100%, 
            0% 100%
        );
    }
    50% {
        clip-path: polygon(
            0% 75%, 
            10% 80%, 
            20% 85%, 
            30% 75%, 
            40% 85%, 
            50% 75%, 
            60% 85%, 
            70% 75%, 
            80% 85%, 
            90% 75%, 
            100% 85%, 
            100% 100%, 
            0% 100%
        );
    }
}

.wave-flow {
    animation: wave-flow 8s ease-in-out infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .wave-container svg {
        height: 24px;
        margin-top: -12px;
    }
}

@media (max-width: 480px) {
    .wave-container svg {
        height: 20px;
        margin-top: -10px;
    }
}
</style>

<!-- Services Section -->
<section class="py-20 bg-blue-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-10 right-10 w-64 h-64 bg-orange-500 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-orange-400 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <div class="w-12 h-0.5 bg-gradient-to-r from-orange-500 to-orange-400"></div>
                <p class="text-orange-400 font-semibold text-sm uppercase tracking-wider">Layanan Kami</p>
                <div class="w-12 h-0.5 bg-gradient-to-r from-orange-400 to-orange-500"></div>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4 leading-tight">
                Solusi Teknologi Terpadu untuk Bisnis Anda
            </h2>
            <p class="text-blue-200 leading-relaxed max-w-2xl mx-auto">
                Kami menyediakan layanan teknologi informasi yang komprehensif, 
                mulai dari konsultasi hingga implementasi solusi digital yang inovatif.
            </p>
        </div>

        <!-- Service Cards Grid - 3x2 Layout -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Row 1 -->
            <!-- Card 1: Layanan All in One -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Layanan All in One</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Tak hanya Website, Jasterweb juga bisa membuatkan kamu Design Promosi & Skalian Iklan di Google
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>

            <!-- Card 2: Harga Bisa Request -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Harga Bisa Request</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Suka sama Jasterweb tapi Harga belum cocok ? Santai, Kamu bisa tentukan harga websitemu sendiri
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>

            <!-- Card 3: Ready to Customs -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Ready to Customs</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Selain Web Company & Toko Online, Jasterweb juga siap untuk membuat Website Kompleks / Custom
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>

            <!-- Row 2 -->
            <!-- Card 4: Alur Pekerjaan Jelas -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Alur Pekerjaan Jelas</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Kami Memiliki Cara Kerja yang Efisien dan Profesional untuk membuat websitemu Go-Online dengan sangat baik
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>

            <!-- Card 5: Garansi Selamanya -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Garansi Selamanya</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Tak perlu khawatir soal Support atau Maintenance, Jasterweb siap beri Garansi Website Seumur Hidup.
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>

            <!-- Card 6: Banyak Bonus Gratis -->
            <div class="service-card group bg-white/10 backdrop-blur-sm rounded-xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 hover:shadow-xl hover:-translate-y-2 cursor-pointer relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10 w-16 h-16 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-500/30 group-hover:scale-110 transition-all duration-300">
                    <svg class="w-8 h-8 text-orange-400 group-hover:text-orange-300 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-orange-200 transition-colors duration-300">Banyak Bonus Gratis</h3>
                    <p class="text-blue-200 leading-relaxed group-hover:text-blue-100 transition-colors duration-300">
                        Disetap Paket Website, Jasterweb akan memberikan Bonus yang sangat berguna buat bisnismu
                    </p>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transform translate-x-2 group-hover:translate-x-0 transition-all duration-300">
                    <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="group bg-orange-500 hover:bg-orange-400 text-white px-10 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <span class="mr-3">Lihat Semua Layanan</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
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
    background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(251, 146, 60, 0.05));
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
    box-shadow: 0 20px 25px -5px rgba(249, 115, 22, 0.3), 0 10px 10px -5px rgba(249, 115, 22, 0.2);
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
<section class="py-20 bg-gray-50 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute top-10 right-10 w-64 h-64 bg-blue-600 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-80 h-80 bg-purple-500 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <div class="w-12 h-0.5 bg-gradient-to-r from-blue-600 to-purple-400"></div>
                <p class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Blog & Artikel</p>
                <div class="w-12 h-0.5 bg-gradient-to-r from-purple-400 to-blue-600"></div>
            </div>
            <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mb-4 leading-tight">
                Insight & Tips Teknologi Terbaru
            </h2>
            <p class="text-gray-600 leading-relaxed max-w-2xl mx-auto">
                Dapatkan informasi terkini seputar teknologi, tips pengembangan, dan insight bisnis digital untuk mengembangkan usaha Anda.
            </p>
        </div>

        <!-- Blog Carousel -->
        <div class="relative">
            <div class="blog-carousel-container overflow-hidden">
                <div class="blog-carousel flex" id="blogCarousel">
                    @forelse($blogPosts as $index => $post)
                        <div class="blog-slide flex-none w-full md:w-1/2 lg:w-1/3 px-4">
                            <article class="blog-card group cursor-pointer h-full">
                                <a href="{{ route('blog.show', $post->slug) }}" class="block h-full">
                                    <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 h-full flex flex-col">
                                        <div class="relative overflow-hidden">
                                            <div class="relative h-64">
                                                <img src="{{ $post->featured_image_url }}" 
                                                    alt="{{ $post->title }}" 
                                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                                
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                                
                                                <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-2 rounded-lg text-sm font-medium shadow-lg">
                                                    <div class="text-center">
                                                        <div class="text-lg font-bold">{{ $post->published_at ? $post->published_at->format('d') : $post->created_at->format('d') }}</div>
                                                        <div class="text-xs">{{ $post->published_at ? $post->published_at->format('M') : $post->created_at->format('M') }}</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="absolute top-4 left-4 {{ $post->category_color }} text-white px-3 py-1 rounded-full text-xs font-medium">
                                                    {{ $post->category }}
                                                </div>
                                                
                                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                                    <h3 class="text-white text-xl font-bold leading-tight line-clamp-2">
                                                        {{ $post->title }}
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="p-6 flex-1 flex flex-col">
                                            <div class="flex items-center space-x-4 mb-4 text-sm text-gray-500">
                                                <div class="flex items-center space-x-1">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                                    </svg>
                                                    <span>{{ $post->author }}</span>
                                                </div>
                                                <div class="flex items-center space-x-1">
                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                    <span>{{ $post->reading_time }} min</span>
                                                </div>
                                            </div>
                                            
                                            <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300 flex-1">
                                                {{ $post->excerpt_limited }}
                                            </p>
                                            
                                            <div class="mt-2 pt-2 border-t border-gray-100">
                                                <span class="text-blue-600 font-semibold text-sm group-hover:text-blue-700 transition-colors duration-300 inline-flex items-center">
                                                    Baca Selengkapnya
                                                    <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        </div>
                    @empty
                        <div class="w-full text-center py-16">
                            <div class="max-w-md mx-auto">
                                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada artikel</h3>
                                <p class="text-gray-500">Artikel blog akan segera hadir</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>            

            @if($blogPosts->count() > 1)
                <div class="flex justify-center mt-8 space-x-2">
                    @for($i = 0; $i < $blogPosts->count(); $i++)
                        <button class="carousel-indicator w-3 h-3 rounded-full transition-all duration-300 {{ $i === 0 ? 'bg-blue-600' : 'bg-gray-300 hover:bg-gray-400' }}" data-slide="{{ $i }}"></button>
                    @endfor
                </div>
            @endif
        </div>


        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" class="group bg-blue-900 hover:bg-blue-800 text-white px-10 py-4 rounded-xl font-semibold transition-all duration-300 inline-flex items-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <span class="mr-3">Lihat Semua Artikel</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('blogCarousel');
    const indicators = document.querySelectorAll('.carousel-indicator');
    if (!carousel) return;

    const slides = carousel.children;
    const totalOriginalSlides = {{ $blogPosts->count() }};
    let currentSlide = 0;

    const cloneSlides = () => {
        // Clone all original slides for infinite effect
        for (let i = 0; i < totalOriginalSlides; i++) {
            const clone = slides[i].cloneNode(true);
            carousel.appendChild(clone);
        }
    };

    cloneSlides();

    function getSlideWidthPercent() {
        if (window.innerWidth < 768) {
            return 100;
        } else if (window.innerWidth < 1024) {
            return 50;
        } else {
            return 33.333333;
        }
    }

    function updateCarousel(animate = true) {
        const slideWidthPercent = getSlideWidthPercent();
        const translateX = -currentSlide * slideWidthPercent;
        if (animate) {
            carousel.style.transition = 'transform 0.5s ease-in-out';
        } else {
            carousel.style.transition = 'none';
        }
        carousel.style.transform = `translateX(${translateX}%)`;

        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('bg-blue-600', index === (currentSlide % totalOriginalSlides));
            indicator.classList.toggle('bg-gray-300', index !== (currentSlide % totalOriginalSlides));
        });
    }

    function nextSlide() {
        currentSlide++;
        updateCarousel();

        // if we've reached clones, reset position seamlessly
        if (currentSlide >= totalOriginalSlides * 2) {
            setTimeout(() => {
                currentSlide = currentSlide % totalOriginalSlides;
                updateCarousel(false);
            }, 500);
        }
    }

    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = totalOriginalSlides * 2 - 1;
            updateCarousel(false);
        }
        updateCarousel();
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            updateCarousel();
        });
    });

    setInterval(nextSlide, 5000);

    let startX = 0;
    let endX = 0;
    carousel.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });

    carousel.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = startX - endX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
    }
});
</script>


<style>
/* Carousel Responsive Styles */
@media (max-width: 768px) {
    .blog-slide {
        width: 100% !important;
    }
}
@media (min-width: 769px) and (max-width: 1024px) {
    .blog-slide {
        width: 50% !important;
    }
}
@media (min-width: 1025px) {
    .blog-slide {
        width: 33.333333% !important;
    }
}

.blog-carousel {
    transition: transform 0.5s ease-in-out;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>


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
<style>
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

<script>
// Hide loader once page fully loaded
window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.opacity = '0';
        setTimeout(() => {
            loader.style.display = 'none';
        }, 500);
    }
});
</script>
</body>
</html>