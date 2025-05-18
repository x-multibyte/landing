<div class="relative container mx-auto overflow-hidden px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl">
    <div class="text-center">
        @if(isset($title))
            <h2 class="mb-4 text-3xl font-black md:text-5xl">
                {{ $title }}
            </h2>
        @endif
        
        @if(isset($subtitle))
            <h3 class="mx-auto text-lg font-medium text-balance text-gray-500 md:text-xl md:leading-relaxed lg:w-2/3">
                {{ $subtitle }}
            </h3>
        @endif
    </div>
    
    @if(isset($actions))
        <div class="flex flex-wrap justify-center gap-4 pt-10">
            {{ $actions }}
        </div>
    @else
        <div class="flex flex-wrap justify-center gap-4 pt-10">
            <a href="javascript:void(0)" class="inline-flex items-center justify-center gap-2 rounded-sm bg-blue-700 px-6 py-3 leading-6 font-semibold text-white transition hover:border-blue-800 hover:bg-blue-800 hover:text-white focus:ring-3 focus:ring-blue-500/50 focus:outline-hidden active:border-blue-700 active:bg-blue-700">
                <span>立即体验</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrow-right inline-block size-5 opacity-50">
                    <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    @endif
    
    @if(isset($content))
        <div class="mt-10">
            {{ $content }}
        </div>
    @endif
</div>