<x-landing::app>
    {{-- Slot for the header --}}
    <x-slot:header>
        <x-landing::header>
            {{-- You can customize header content here if needed --}}
            <x-slot:logo>
                <a href="/" class="text-xl font-bold">LandingPage 1</a>
            </x-slot:logo>

            <x-slot:nav>
                <a href="#features" class="text-gray-600 hover:text-blue-600">Features</a>
                <a href="#pricing" class="text-gray-600 hover:text-blue-600">Pricing</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
            </x-slot:nav>

            <x-slot:actions>
                <x-landing::button href="/login" variant="outline" size="sm">
                    Log In
                </x-landing::button>
                <x-landing::button href="/register" variant="primary" size="sm">
                    Sign Up
                </x-landing::button>
            </x-slot:actions>
        </x-landing::header>
    </x-slot:header>

    {{-- Main content slot (implicitly used by hero or other components) --}}
    <x-landing::hero>
        <x-slot:title>
            Welcome to Landing Page 1!
        </x-slot:title>

        <x-slot:subtitle>
            This is a subtitle for Landing Page 1, built with reusable components.
        </x-slot:subtitle>

        <x-slot:actions>
            <x-landing::button href="#learn-more" variant="primary" size="lg">
                Learn More
            </x-landing::button>
            <x-landing::button href="#get-started" variant="secondary" size="lg">
                Get Started
            </x-landing::button>
        </x-slot:actions>

        {{-- You can add extra content to the hero section if your hero component supports it --}}
        {{-- <x-slot:extra>
            <p class="mt-4 text-sm text-gray-600">Some extra information here.</p>
        </x-slot:extra> --}}
    </x-landing::hero>

    {{-- You can add more sections here using other components or custom HTML --}}
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center">More Content Sections</h2>
            <p class="mt-4 text-lg text-gray-500 text-center">
                Build out the rest of your landing page here.
            </p>
        </div>
    </div>

    {{-- Slot for the footer --}}
    <x-slot:footer>
        <x-landing::footer>
            {{-- You can customize footer content here if needed --}}
            <x-slot:links>
                <a href="/about" class="text-gray-500 hover:text-gray-700">About Us</a>
                <a href="/privacy" class="text-gray-500 hover:text-gray-700">Privacy Policy</a>
                <a href="/terms" class="text-gray-500 hover:text-gray-700">Terms of Service</a>
            </x-slot:links>
            <x-slot:copyright>
                &copy; {{ date('Y') }} Landing Page 1. All rights reserved.
            </x-slot:copyright>
        </x-landing::footer>
    </x-slot:footer>
</x-landing::app>