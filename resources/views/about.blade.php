@extends('layouts.app')

@section('title', 'About')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />


@section('content')
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


@endsection