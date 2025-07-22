<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@hasSection('title')@yield('title') – @endif{{ config('title', 'Admin Panel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#64748b'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Page Loader -->
    <div id="loader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="relative">
            <div class="w-20 h-20 border-4 border-orange-500 rounded-full animate-spin border-t-transparent"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="{{ asset('images/logo-aminsproject.png') }}" alt="AMINS PROJECT" class="w-10 h-10 object-contain">
            </div>
        </div>
    </div>
    <div class="flex h-screen">
        <!-- Simplified Sidebar -->
        <div class="w-64 bg-white shadow-lg border-r border-gray-200">
            <!-- Logo Section -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <!-- Logo Image - Replace with your actual logo -->
                    <img src="{{ asset('images/logo-aminsproject.png') }}" alt="Logo" class="w-25 h-25 object-contain">
                </div>
            </div>

            <!-- User Info -->
            <div class="p-4 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                    <div>
                        <h3 class="font-medium text-gray-900 text-sm">{{ auth()->user()->name }}</h3>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <i class="fas fa-tachometer-alt w-5 text-center mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.users.index') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.users.*') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <i class="fas fa-users w-5 text-center mr-3"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('admin.products.index') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.products.*') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <i class="fas fa-box w-5 text-center mr-3"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('admin.blog-posts.index') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.blog-posts.*') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <i class="fas fa-newspaper w-5 text-center mr-3"></i>
                            <span>Blog Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.portfolios.index') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.portfolios.*') ? 'bg-blue-50 text-blue-700' : '' }}">
                            <i class="fas fa-folder-open w-5 text-center mr-3"></i>
                            <span>View Portfolio</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <li class="my-4">
                        <hr class="border-gray-200">
                    </li>
                    
                    <li>
                        <a href="{{ route('shop') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100" target="_blank">
                            <i class="fas fa-store w-5 text-center mr-3"></i>
                            <span>View Shop</span>
                            <i class="fas fa-external-link-alt ml-auto text-xs text-gray-400"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog') }}" 
                           class="flex items-center px-3 py-2 text-gray-700 rounded-lg hover:bg-gray-100" target="_blank">
                            <i class="fas fa-blog w-5 text-center mr-3"></i>
                            <span>View Blog</span>
                            <i class="fas fa-external-link-alt ml-auto text-xs text-gray-400"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Logout Button -->
            <div class="p-4 border-t border-gray-200">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-3 py-2 text-red-600 rounded-lg hover:bg-red-50 transition-colors">
                        <i class="fas fa-sign-out-alt w-5 text-center mr-3"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
                    <div class="text-sm text-gray-500">
                        {{ now()->format('M j, Y') }}
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.bg-green-100, .bg-red-100');
            alerts.forEach(alert => {
                alert.style.transition = 'opacity 0.5s';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            });
        }, 5000);
    
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
    @stack('scripts')
</body>
</html>
