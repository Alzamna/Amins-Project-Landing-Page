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
                <a href="{{ route('login') }}"
                    class="login-btn bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg text-base font-semibold transition-all duration-300 whitespace-nowrap hover:scale-105 hover:shadow-lg border-2 border-orange-500 hover:border-orange-600">
                    Login
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
  content: "";
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

/* Header Background States - UPDATED */
#sticky-header {
  /* Default state: solid background at top */
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.05);
}

#sticky-header.header-at-top {
  /* At top: solid white background */
  background: rgba(255, 255, 255, 1);
  backdrop-filter: blur(15px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

#sticky-header.header-scrolled {
  /* Scrolled: semi-transparent */
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Navigation Link Colors - UPDATED */
#sticky-header .nav-link {
  color: #1e3a8a !important; /* Always dark blue for readability */
}

#sticky-header .nav-link.text-orange-500 {
  color: #f97316 !important; /* Active links stay orange */
}

#sticky-header .nav-link:hover {
  color: #f97316 !important; /* Hover state orange */
}

/* Mobile Menu Button Color - UPDATED */
#sticky-header #mobile-menu-button {
  color: #1e3a8a; /* Always dark for visibility */
}

#sticky-header #mobile-menu-button:hover {
  color: #f97316;
  background-color: rgba(249, 115, 22, 0.1);
}

/* Login Button Styles */
.login-btn {
  position: relative;
  overflow: hidden;
}

.login-btn::before {
  content: "";
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

/* Login button remains consistent */
#sticky-header .login-btn {
  background-color: #f97316;
  border-color: #f97316;
}

#sticky-header .login-btn:hover {
  background-color: #ea580c;
  border-color: #ea580c;
}

/* Mobile Navigation Animation */
.mobile-nav-link {
  transform: translateX(-20px);
  opacity: 0;
  animation: slideInLeft 0.3s ease forwards;
}

.mobile-nav-link:nth-child(1) {
  animation-delay: 0.1s;
}
.mobile-nav-link:nth-child(2) {
  animation-delay: 0.15s;
}
.mobile-nav-link:nth-child(3) {
  animation-delay: 0.2s;
}
.mobile-nav-link:nth-child(4) {
  animation-delay: 0.25s;
}
.mobile-nav-link:nth-child(5) {
  animation-delay: 0.3s;
}
.mobile-nav-link:nth-child(6) {
  animation-delay: 0.35s;
}
.mobile-nav-link:nth-child(7) {
  animation-delay: 0.4s;
}

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

/* Logo transition for different states */
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
  padding-top: 6rem;
}

@media (min-width: 1024px) {
  .header-offset {
    padding-top: 7rem;
  }
}
</style>
<script>
    document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("sticky-header")
  const mainNav = document.getElementById("main-nav")
  const mobileMenuButton = document.getElementById("mobile-menu-button")
  const mobileMenu = document.getElementById("mobile-menu")
  const mobileOverlay = document.getElementById("mobile-overlay")
  const menuIcon = document.getElementById("menu-icon")
  const closeIcon = document.getElementById("close-icon")

  let isScrolled = false
  let isAtTop = true
  let isMobileMenuOpen = false
  let scrollTimeout

  // Function to calculate and update header height
  function updateHeaderHeight() {
    const headerHeight = header.offsetHeight
    document.documentElement.style.setProperty("--header-height", `${headerHeight}px`)
  }

  // UPDATED: Enhanced scroll handler with top detection
  function handleScroll() {
    clearTimeout(scrollTimeout)
    scrollTimeout = setTimeout(() => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop
      const shouldBeScrolled = scrollTop > 50
      const shouldBeAtTop = scrollTop <= 10 // Very top of page

      // Handle scrolled state
      if (shouldBeScrolled !== isScrolled) {
        isScrolled = shouldBeScrolled

        if (isScrolled) {
          header.classList.add("header-scrolled")
          header.classList.remove("header-at-top")

          // Adjust main nav padding
          mainNav.classList.add("py-3", "lg:py-4")
          mainNav.classList.remove("py-4", "lg:py-6")
        } else if (!shouldBeAtTop) {
          header.classList.remove("header-scrolled", "header-at-top")

          // Reset main nav padding
          mainNav.classList.add("py-4", "lg:py-6")
          mainNav.classList.remove("py-3", "lg:py-4")
        }
      }

      // Handle at-top state
      if (shouldBeAtTop !== isAtTop) {
        isAtTop = shouldBeAtTop

        if (isAtTop) {
          header.classList.add("header-at-top")
          header.classList.remove("header-scrolled")

          // Full padding at top
          mainNav.classList.add("py-4", "lg:py-6")
          mainNav.classList.remove("py-3", "lg:py-4")
        } else {
          header.classList.remove("header-at-top")
        }
      }

      // Update header height after state change
      setTimeout(updateHeaderHeight, 350)
    }, 10)
  }

  function toggleMobileMenu() {
    isMobileMenuOpen = !isMobileMenuOpen

    if (isMobileMenuOpen) {
      // Open mobile menu
      mobileMenu.classList.add("max-h-screen", "opacity-100")
      mobileMenu.classList.remove("max-h-0", "opacity-0")

      // Show overlay
      mobileOverlay.classList.add("opacity-100")
      mobileOverlay.classList.remove("pointer-events-none")

      // Switch icons
      menuIcon.classList.add("hidden")
      closeIcon.classList.remove("hidden")

      // Prevent body scroll
      document.body.style.overflow = "hidden"

      // Add animation to menu items
      const mobileLinks = mobileMenu.querySelectorAll(".mobile-nav-link")
      mobileLinks.forEach((link, index) => {
        link.style.animationDelay = `${(index + 1) * 0.05}s`
      })
    } else {
      // Close mobile menu
      mobileMenu.classList.add("max-h-0", "opacity-0")
      mobileMenu.classList.remove("max-h-screen", "opacity-100")

      // Hide overlay
      mobileOverlay.classList.add("pointer-events-none")
      mobileOverlay.classList.remove("opacity-100")

      // Switch icons
      menuIcon.classList.remove("hidden")
      closeIcon.classList.add("hidden")

      // Restore body scroll
      document.body.style.overflow = ""
    }

    // Update header height after menu toggle
    setTimeout(updateHeaderHeight, 350)
  }

  // Event listeners
  window.addEventListener("scroll", handleScroll, { passive: true })
  window.addEventListener("resize", () => {
    updateHeaderHeight()
    if (window.innerWidth >= 1024 && isMobileMenuOpen) {
      toggleMobileMenu()
    }
  })

  if (mobileMenuButton) {
    mobileMenuButton.addEventListener("click", toggleMobileMenu)
  }

  if (mobileOverlay) {
    mobileOverlay.addEventListener("click", () => {
      if (isMobileMenuOpen) {
        toggleMobileMenu()
      }
    })
  }

  // Close mobile menu when clicking on links
  const mobileLinks = mobileMenu?.querySelectorAll("a") || []
  mobileLinks.forEach((link) => {
    link.addEventListener("click", () => {
      if (isMobileMenuOpen) {
        toggleMobileMenu()
      }
    })
  })

  // Handle escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && isMobileMenuOpen) {
      toggleMobileMenu()
    }
  })

  // Initialize - set initial state based on scroll position
  updateHeaderHeight()
  handleScroll()

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        const headerHeight = header.offsetHeight
        const targetPosition = target.offsetTop - headerHeight - 20

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        })
      }
    })
  })
})

</script>