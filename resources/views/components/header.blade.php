<div class="container mx-auto flex flex-col gap-6 px-4 text-center sm:flex-row sm:items-center sm:justify-between sm:gap-0 lg:px-10 xl:max-w-6xl">
    <div>
        <a href="{{ $logoUrl ?? '/' }}" class="group inline-flex items-center gap-2 text-lg font-bold text-gray-800 transition hover:text-black">
            @if(isset($logo))
                {{ $logo }}
            @else
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrows-up-down inline-block size-5 rotate-45 text-blue-500 transition group-hover:rotate-90">
                    <path fill-rule="evenodd" d="M2.24 6.8a.75.75 0 0 0 1.06-.04l1.95-2.1v8.59a.75.75 0 0 0 1.5 0V4.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0L2.2 5.74a.75.75 0 0 0 .04 1.06Zm8 6.4a.75.75 0 0 0-.04 1.06l3.25 3.5a.75.75 0 0 0 1.1 0l3.25-3.5a.75.75 0 1 0-1.1-1.02l-1.95 2.1V6.75a.75.75 0 0 0-1.5 0v8.59l-1.95-2.1a.75.75 0 0 0-1.06-.04Z" clip-rule="evenodd" />
                </svg>
                <span>{{ $logoText ?? config('app.name', 'App') }}</span>
            @endif
        </a>
    </div>
    
    <nav class="space-x-4 sm:space-x-6">
        @if(isset($navigation))
            {{ $navigation }}
        @else
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                <span>功能</span>
            </a>
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                <span>价格</span>
            </a>
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                <span>关于</span>
            </a>
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                <span>联系</span>
            </a>
        @endif
    </nav>
    
    @if(isset($actions))
        <div>
            {{ $actions }}
        </div>
    @else
        <div>
            <a href="javascript:void(0)" class="inline-flex items-center justify-center gap-2 rounded-sm border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-700 hover:border-gray-300 hover:bg-gray-100 hover:text-gray-700 active:border-gray-200 active:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrow-right-end-on-rectangle inline-block size-5 opacity-50">
                    <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd" />
                </svg>
                <span>登录</span>
            </a>
        </div>
    @endif
</div>