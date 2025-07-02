@extends('layouts.app')

@section('title', 'Contact')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />


@section('content')
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


@endsection