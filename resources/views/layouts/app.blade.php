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
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-a.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

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
<body class="font-poppins antialiased">
    <!-- Page Loader -->
    <div id="loader" class="fixed inset-0 z-[9999] flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="relative">
            <div class="w-20 h-20 border-4 border-orange-500 rounded-full animate-spin border-t-transparent"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <img src="{{ asset('images/logo-aminsproject.png') }}" alt="AMINS PROJECT" class="w-10 h-10 object-contain">
            </div>
        </div>
    </div>
    <div class="min-h-screen bg-white">
        @include('components')
        <div class="mt-16 mb-16">    
            @yield('content')

        </div>

        @include('footer')
    </div>

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
    @push('scripts')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var excerptQuill = new Quill('#excerpt-editor', { theme: 'snow' });
            var contentQuill = new Quill('#content-editor', { theme: 'snow' });

            // Set initial value from textarea (for edit form)
            var excerptTextarea = document.getElementById('excerpt');
            var contentTextarea = document.getElementById('content');
            if (excerptTextarea && excerptTextarea.value) {
                excerptQuill.root.innerHTML = excerptTextarea.value;
            }
            if (contentTextarea && contentTextarea.value) {
                contentQuill.root.innerHTML = contentTextarea.value;
            }

            // On submit, update textarea with Quill HTML
            var form = excerptTextarea.closest('form');
            form.addEventListener('submit', function() {
                excerptTextarea.value = excerptQuill.root.innerHTML;
                contentTextarea.value = contentQuill.root.innerHTML;
            });
        });
    </script>
@endpush
</body>
</html>