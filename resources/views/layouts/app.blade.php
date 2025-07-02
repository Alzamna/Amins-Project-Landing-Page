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
<body class="font-poppins antialiased">
    <div class="min-h-screen bg-white">
        @include('components')
        <div class="mt-16 mb-16">    
            @yield('content')

        </div>

        @include('footer')
    </div>
</body>
</html>