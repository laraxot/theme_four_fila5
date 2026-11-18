<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta Tags Dinamici -->
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    @if(isset($description))
        <meta name="description" content="{{ $description }}">
    @endif
    @if(isset($keywords))
        <meta name="keywords" content="{{ $keywords }}">
    @endif

    <!-- Open Graph Meta Tags -->
    @if(isset($og_image))
        <meta property="og:image" content="{{ $og_image }}">
    @endif
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    @if(isset($description))
        <meta property="og:description" content="{{ $description }}">
    @endif
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">

    <!-- Canonical URL -->
    @if(isset($canonical))
        <link rel="canonical" href="{{ $canonical }}">
    @else
        <link rel="canonical" href="{{ request()->url() }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <!-- Styles -->
    @livewireStyles
    @filamentStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'],'themes/Four')

    <!-- Custom Styles -->
    @stack('styles')
</head>
<body class="h-full font-sans antialiased bg-gray-50">
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-blue-600 text-white px-4 py-2 rounded-md z-50">
        {{ __('Skip to main content') }}
    </a>

    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        @if(isset($header))
            {{ $header }}
        @else
            <x-navigation />
        @endif
    </header>

    <!-- Main Content -->
    <main id="main-content" class="flex-1">
        @if(isset($slot))
            {{ $slot }}
        @else
            <!-- Default content area -->
            <div class="container mx-auto px-4 py-8">
                @yield('content')
            </div>
        @endif
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        @if(isset($footer))
            {{ $footer }}
        @else
            {{-- Niente contatti finti: descrizione e contatti arrivano dalla config del tenant (xra.description,
                 xra.contact_email); se mancano la colonna non compare. --}}
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">{{ config('app.name', 'Laravel') }}</h3>
                        @if (filled(config('xra.description')))
                            <p class="text-gray-300 text-sm">{{ config('xra.description') }}</p>
                        @endif
                    </div>

                    <div>
                        <ul class="space-y-2 text-sm">
                            <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Home') }}</a></li>
                            @if (filled(config('xra.login_url')))
                                <li><a href="{{ config('xra.login_url') }}" class="text-gray-300 hover:text-white transition-colors">{{ __('Log in') }}</a></li>
                            @endif
                        </ul>
                    </div>

                    @if (filled(config('xra.contact_email')))
                        <div>
                            <div class="text-sm text-gray-300 space-y-2">
                                <p><a href="mailto:{{ config('xra.contact_email') }}" class="hover:text-white">{{ config('xra.contact_email') }}</a></p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Copyright -->
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-300">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. {{ __('All rights reserved.') }}</p>
                </div>
            </div>
        @endif
    </footer>

    <!-- Scripts -->
    @filamentScripts(withCore: true)
    @stack('scripts')

    <!-- Alpine.js -->
    <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

    <!-- Custom Scripts -->
    @stack('custom-scripts')
</body>
</html>
