<x-landing::app>
    <x-slot:title>Landing Page 2 - Software</x-slot:title>

    {{-- Custom Styles (if any specific to landing2, otherwise Tailwind from app.blade.php via Vite) --}}
    {{-- <x-slot:styles>
        <style>
            /* Custom styles for landing2 */
        </style>
    </x-slot:styles> --}}

    <x-slot:header>
        <x-landing::header>
            <x-slot:logoText>Static</x-slot:logoText> {{-- From original: <span>Static</span> --}}
            <x-slot:logoUrl>#</x-slot:logoUrl> {{-- Assuming root for now --}}
            {{-- Original logo SVG can be placed in the 'logo' slot if exact replication is needed --}}
            {{-- <x-slot:logo>
                <a href="#" class="group inline-flex items-center gap-2 text-lg font-bold text-gray-800 transition hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrows-up-down inline-block size-5 rotate-45 text-blue-500 transition group-hover:rotate-90">
                        <path fill-rule="evenodd" d="M2.24 6.8a.75.75 0 0 0 1.06-.04l1.95-2.1v8.59a.75.75 0 0 0 1.5 0V4.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0L2.2 5.74a.75.75 0 0 0 .04 1.06Zm8 6.4a.75.75 0 0 0-.04 1.06l3.25 3.5a.75.75 0 0 0 1.1 0l3.25-3.5a.75.75 0 1 0-1.1-1.02l-1.95 2.1V6.75a.75.75 0 0 0-1.5 0v8.59l-1.95-2.1a.75.75 0 0 0-1.06-.04Z" clip-rule="evenodd" />
                    </svg>
                    <span>Static</span>
                </a>
            </x-slot:logo> --}}

            <x-slot:nav>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>Features</span>
                </a>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>Pricing</span>
                </a>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>About</span>
                </a>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>Contact</span>
                </a>
            </x-slot:nav>

            <x-slot:actions>
                <x-landing::button href="javascript:void(0)" variant="outline" size="sm">
                    {{-- Original SVG icon for login --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrow-right-end-on-rectangle inline-block size-5 opacity-50">
                        <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd" />
                    </svg> --}}
                    Login
                </x-landing::button>
            </x-slot:actions>
        </x-landing::header>
    </x-slot:header>

    {{-- Hero Section --}}
    {{-- The outer div with skew can be part of the app layout or specific to this page's main content --}}
    <div class="relative bg-white">
        <div class="absolute inset-0 -skew-y-3 bg-linear-to-t from-blue-50 to-white"></div>
        <div class="relative container mx-auto overflow-hidden px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl">
            <x-landing::hero>
                <x-slot:title>
                    Analytics just made <span class="text-blue-600">simple</span>
                </x-slot:title>
                <x-slot:subtitle>
                    Get access to the best software for your online business and get control of your earnings and growth.
                </x-slot:subtitle>
                <x-slot:actions>
                    <x-landing::button href="javascript:void(0)" variant="primary" size="lg">
                        <span>Get Access</span>
                        {{-- Original SVG icon for Get Access --}}
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrow-right inline-block size-5 opacity-50">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                        </svg> --}}
                    </x-landing::button>
                    <x-landing::button href="javascript:void(0)" variant="secondary" size="lg" class="bg-gray-700 hover:bg-gray-800">
                        {{-- Adjusted to secondary, original was custom gray. Tailwind classes can be added via class attribute --}}
                        <span>Learn More</span>
                    </x-landing::button>
                </x-slot:actions>

                {{-- Hero Content (Image Section) --}}
                <div class="pt-10 pb-24">
                    <div class="relative rounded-xl bg-white p-2 shadow-lg ring-1 ring-blue-100 lg:mx-40 lg:flex lg:items-center lg:justify-center">
                        <div class="absolute top-0 left-0 -mt-12 -ml-20 h-48 w-48 rounded-full bg-blue-200/50"></div>
                        <div class="absolute top-0 right-0 -mt-20 -mr-16 h-32 w-32 rotate-3 rounded-xl bg-green-200/50"></div>
                        <div class="absolute right-0 bottom-0 -mr-16 -mb-10 h-40 w-40 rounded-full bg-gray-200/50"></div>
                        <div class="absolute bottom-0 left-0 -mb-16 -ml-12 h-20 w-20 -rotate-12 rounded-xl bg-red-200/50"></div>
                        <img src="{{ asset('vendor/landing/assets/landing2/unsplash-8fe0ec7b13b.jpg') }}" alt="Hero Image" class="relative mx-auto aspect-16/10 w-full rounded-lg object-cover" />
                        {{-- Note: Update image path assuming assets are published to public/vendor/landing/assets/landing2/ --}}
                    </div>
                </div>
            </x-landing::hero>
        </div>
    </div>

    {{-- How it works Section --}}
    <div class="bg-white">
        <div class="container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl">
            <!-- Heading -->
            <div class="text-center">
                <h2 class="mb-4 text-3xl font-black md:text-5xl">How it works</h2>
                <h3 class="mx-auto text-lg font-medium text-balance text-gray-500 md:text-xl md:leading-relaxed lg:w-2/3">
                    It’s as simple as it sounds and ever more!
                </h3>
            </div>
            <!-- END Heading -->

            <!-- Steps -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
                <div class="rounded-2xl border-2 border-blue-50 bg-linear-to-t from-blue-50 to-white p-10 text-center transition hover:border-blue-100">
                    <svg class="hi-outline hi-desktop-computer mb-5 inline-block h-12 w-12 text-blue-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">
                        1. Get your custom dashboard
                    </h4>
                    <p class="text-left text-sm leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
                <div class="rounded-2xl border-2 border-indigo-50 bg-linear-to-t from-indigo-50 to-white p-10 text-center transition hover:border-indigo-100">
                    <svg class="hi-outline hi-cube mb-5 inline-block h-12 w-12 text-indigo-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">
                        2. Connect to your product
                    </h4>
                    <p class="text-left text-sm leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
                <div class="rounded-2xl border-2 border-purple-50 bg-linear-to-t from-purple-50 to-white p-10 text-center transition hover:border-purple-100 sm:col-span-2 lg:col-span-1">
                    <svg class="hi-outline hi-presentation-chart-line mb-5 inline-block h-12 w-12 text-purple-500" stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                    </svg>
                    <h4 class="mb-2 text-lg font-bold">3. Explore Analytics</h4>
                    <p class="text-left text-sm leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
            </div>
            <!-- END Steps -->
        </div>
    </div>
    <!-- Features Section -->
    <div class="relative bg-white">
        <div class="absolute inset-0 skew-y-3 bg-linear-to-t from-blue-50 to-white"></div>
        <div class="relative container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl">
            <!-- Heading -->
            <div class="text-center">
                <h2 class="mb-4 text-3xl font-black md:text-5xl">
                    Best Features
                </h2>
                <h3 class="mx-auto text-lg font-medium text-balance text-gray-600 md:text-xl md:leading-relaxed lg:w-2/3">
                    Amazing integrations will help you reach new customers and improve your user satisfaction.
                </h3>
            </div>
            <!-- END Heading -->

            <!-- Features -->
            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-12">
                <div class="py-5 text-center">
                    <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                        <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-blue-300"></div>
                        <div class="absolute inset-0 -m-2 rounded-3xl bg-blue-600/75"></div>
                        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-code relative inline-block h-10 w-10 text-white opacity-90 transition duration-150 ease-out group-hover:scale-125 group-hover:opacity-100">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-bold">Automation</h4>
                    <p class="text-left leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
                <div class="py-5 text-center">
                    <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                        <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-blue-300"></div>
                        <div class="absolute inset-0 -m-2 rounded-3xl bg-blue-600/75"></div>
                        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-device-mobile relative inline-block h-10 w-10 text-white opacity-90 transition duration-150 ease-out group-hover:scale-125 group-hover:opacity-100">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-bold">Schedule</h4>
                    <p class="text-left leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
                <div class="py-5 text-center">
                    <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                        <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-blue-300"></div>
                        <div class="absolute inset-0 -m-2 rounded-3xl bg-blue-600/75"></div>
                        <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="hi-outline hi-circle-stack relative inline-block h-10 w-10 text-white opacity-90 transition duration-150 ease-out group-hover:scale-125 group-hover:opacity-100">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25A2.25 2.25 0 0 1 5.25 3h13.5A2.25 2.25 0 0 1 21 5.25Zm-6-2.25h.008v.008H15V3Zm-3.008 0h.008v.008H11.992V3Zm-3.008 0h.008v.008H8.992V3Z"></path>
                        </svg>
                    </div>
                    <h4 class="mb-2 text-xl font-bold">Integrations</h4>
                    <p class="text-left leading-relaxed text-gray-600">
                        Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate.
                    </p>
                </div>
            </div>
            <!-- END Features -->
        </div>
    </div>
    <!-- END Features Section -->

        <!-- Pricing Section -->
        <div class="bg-white">
            <div class="container mx-auto space-y-10 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-4xl">
                <!-- Heading -->
                <div class="text-center">
                    <h2 class="mb-4 text-3xl font-black md:text-5xl">
                        One powerful plan
                    </h2>
                    <h3 class="mx-auto text-lg font-medium text-gray-600 md:text-xl md:leading-relaxed lg:w-2/3">
                        Get access by paying once. Now that’s peace of mind.
                    </h3>
                </div>
                <!-- END Heading -->

                <!-- Lifetime Plan -->
                <div class="relative flex flex-col rounded-lg border-2 border-blue-400 bg-blue-50 shadow-xs hover:border-blue-500 lg:mx-auto lg:w-96">
                    <div class="rounded-t-lg bg-white p-5 text-center lg:p-6">
                        <span class="mb-4 inline-flex items-center gap-1 rounded-full bg-blue-200/50 px-3 py-1 text-sm font-semibold tracking-wider text-blue-700 uppercase">
                            <span>Lifetime</span>
                        </span>
                        <div class="mb-1">
                            <span class="text-3xl font-extrabold lg:text-4xl">$199</span>
                        </div>
                        <p class="text-sm font-medium text-gray-600">
                            Get access for life
                        </p>
                    </div>
                    <div class="grow space-y-5 p-5 lg:space-y-6 lg:p-6">
                        <ul class="space-y-4 text-sm lg:text-base">
                            <li class="flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="hi-mini hi-check inline-block size-5 text-emerald-500">
                                    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                                </svg>
                                <span><strong>Unlimited</strong> Everything</span>
                            </li>
                        </ul>
                    </div>
                    <div class="px-5 pb-5 lg:px-6 lg:pb-6">
                        <a href="javascript:void(0)" class="flex items-center justify-center gap-2 rounded-sm bg-blue-700 px-6 py-3 leading-6 font-semibold text-white transition hover:border-blue-800 hover:bg-blue-800 hover:text-white focus:ring-3 focus:ring-blue-500/50 focus:outline-hidden active:border-blue-700 active:bg-blue-700">
                            <span>Get Access</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="hi-mini hi-arrow-right inline-block size-5 opacity-50">
                                <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- END Lifetime Plan -->
            </div>
        </div>
        <!-- END Pricing Section -->

    {{-- All main sections have been migrated. Additional sections like Testimonials or FAQ can be added here if needed. --}}

    <x-slot:footer>
        <x-landing::footer>
            <x-slot:links>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    About
                </a>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    Terms of Service
                </a>
                <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    Privacy Policy
                </a>
            </x-slot:links>
            <x-slot:copyright>
                <div class="text-gray-500">
                    <span class="font-medium">Company</span> © <script>document.write(new Date().getFullYear());</script>
                </div>
            </x-slot:copyright>
            {{-- Social links from original footer can be added here if footer component is extended or via default slot --}}
        </x-landing::footer>
    </x-slot:footer>

</x-landing::app>