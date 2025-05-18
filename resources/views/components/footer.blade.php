<div class="container mx-auto flex flex-col gap-6 px-4 py-8 text-center text-sm md:flex-row md:justify-between md:gap-0 md:text-left lg:px-8 xl:max-w-6xl">
    @if(isset($navigation))
        <nav class="space-x-2 sm:space-x-4">
            {{ $navigation }}
        </nav>
    @else
        <nav class="space-x-2 sm:space-x-4">
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                关于我们
            </a>
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                服务条款
            </a>
            <a href="javascript:void(0)" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                隐私政策
            </a>
        </nav>
    @endif
    
    @if(isset($copyright))
        <div class="text-gray-500">
            {{ $copyright }}
        </div>
    @else
        <div class="text-gray-500">
            <span class="font-medium">{{ config('app.name', 'Company') }}</span> ©
            <script>document.write(new Date().getFullYear());</script>
        </div>
    @endif
    
    @if(isset($actions))
        <div class="mt-4 md:mt-0">
            {{ $actions }}
        </div>
    @endif
</div>