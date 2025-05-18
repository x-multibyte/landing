<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @if(isset($styles))
        {{ $styles }}
    @endif

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div id="page-container" class="min-h-screen bg-gray-100">
        <!-- Header -->
        @if(isset($header))
            <header id="page-header" class="relative flex flex-none items-center py-10">
                {{ $header }}
            </header>
        @endif

        <!-- Main Content -->
        <main id="page-content" class="flex max-w-full flex-auto flex-col">
            {{ $slot }}
        </main>

        <!-- Footer -->
        @if(isset($footer))
            <footer id="page-footer" class="bg-white py-8">
                {{ $footer }}
            </footer>
        @else
            <footer id="page-footer" class="bg-white py-8">
                <div class="container mx-auto flex flex-col md:flex-row md:justify-between px-4 text-center md:text-left">
                    <nav class="space-x-4 mb-4 md:mb-0">
                        <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-900">关于我们</a>
                        <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-900">服务条款</a>
                        <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-900">隐私政策</a>
                    </nav>
                    <div class="text-gray-500">
                        <span class="font-medium">{{ config('app.name', 'Company') }}</span> ©
                        <script>document.write(new Date().getFullYear());</script>
                    </div>
                </div>
            </footer>
        @endif
    </div>

    <!-- Additional Scripts -->
    @if(isset($scripts))
        {{ $scripts }}
    @endif
</body>
</html>