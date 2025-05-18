{{-- 这是一个示例文件，展示如何使用组件构建Landing Page --}}

<x-app>
    <x-slot:title>示例Landing Page</x-slot:title>
    
    {{-- 自定义样式 --}}
    <x-slot:styles>
        <style>
            .bg-gradient {
                background: linear-gradient(to right, #1a2980, #26d0ce);
            }
        </style>
    </x-slot:styles>
    
    {{-- 页眉 --}}
    <x-slot:header>
        <x-header>
            <x-slot:logoText>我的应用</x-slot:logoText>
            
            <x-slot:navigation>
                <a href="#features" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>功能特点</span>
                </a>
                <a href="#pricing" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>价格方案</span>
                </a>
                <a href="#about" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>关于我们</span>
                </a>
                <a href="#contact" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    <span>联系方式</span>
                </a>
            </x-slot:navigation>
            
            <x-slot:actions>
                <a href="/login" class="inline-flex items-center justify-center gap-2 rounded-sm border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-700 hover:border-gray-300 hover:bg-gray-100 hover:text-gray-700 active:border-gray-200 active:bg-white">
                    <span>登录</span>
                </a>
            </x-slot:actions>
        </x-header>
    </x-slot:header>
    
    {{-- 主要内容 --}}
    <div class="relative bg-white">
        <div class="absolute inset-0 -skew-y-3 bg-linear-to-t from-blue-50 to-white"></div>
        
        {{-- Hero部分 --}}
        <div class="relative">
            <x-hero>
                <x-slot:title>
                    简单而强大的 <span class="text-blue-600">解决方案</span>
                </x-slot:title>
                
                <x-slot:subtitle>
                    获取最佳软件来管理您的在线业务，掌控您的收益和增长。
                </x-slot:subtitle>
                
                <x-slot:actions>
                    <a href="/register" class="inline-flex items-center justify-center gap-2 rounded-sm bg-blue-700 px-6 py-3 leading-6 font-semibold text-white transition hover:border-blue-800 hover:bg-blue-800 hover:text-white focus:ring-3 focus:ring-blue-500/50 focus:outline-hidden active:border-blue-700 active:bg-blue-700">
                        <span>立即注册</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="hi-mini hi-arrow-right inline-block size-5 opacity-50">
                            <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="/demo" class="inline-flex items-center justify-center gap-2 rounded-sm border border-gray-200 bg-white px-6 py-3 leading-6 font-semibold text-gray-700 transition hover:border-gray-300 hover:bg-gray-100 hover:text-gray-700 active:border-gray-200 active:bg-white">
                        <span>查看演示</span>
                    </a>
                </x-slot:actions>
            </x-hero>
        </div>
        
        {{-- 其他内容部分 --}}
        <div id="features" class="py-16 bg-white">
            <div class="container mx-auto px-4 xl:max-w-6xl">
                <h2 class="text-3xl font-bold text-center mb-12">主要功能</h2>
                <!-- 这里添加功能内容 -->
            </div>
        </div>
        
        <div id="pricing" class="py-16 bg-gray-50">
            <div class="container mx-auto px-4 xl:max-w-6xl">
                <h2 class="text-3xl font-bold text-center mb-12">价格方案</h2>
                <!-- 这里添加价格内容 -->
            </div>
        </div>
    </div>
    
    {{-- 页脚 --}}
    <x-slot:footer>
        <x-footer>
            <x-slot:navigation>
                <a href="#about" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    关于我们
                </a>
                <a href="/terms" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    服务条款
                </a>
                <a href="/privacy" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    隐私政策
                </a>
                <a href="#contact" class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                    联系我们
                </a>
            </x-slot:navigation>
            
            <x-slot:copyright>
                <span class="font-medium">我的应用</span> © {{ date('Y') }} 版权所有
            </x-slot:copyright>
        </x-footer>
    </x-slot:footer>
    
    {{-- 自定义脚本 --}}
    <x-slot:scripts>
        <script>
            // 这里可以添加自定义JavaScript
            console.log('Landing page loaded!');
        </script>
    </x-slot:scripts>
</x-app>