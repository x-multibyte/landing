@props([
    'href' => 'javascript:void(0)',
    'variant' => 'primary', // primary, secondary, outline
    'size' => 'md', // sm, md, lg
    'class' => '',
])

@php
    $baseClasses = 'inline-flex items-center justify-center gap-2 font-semibold transition focus:outline-none';
    
    $variantClasses = [
        'primary' => 'bg-blue-700 text-white hover:bg-blue-800 focus:ring-3 focus:ring-blue-500/50 active:bg-blue-700',
        'secondary' => 'bg-gray-200 text-gray-800 hover:bg-gray-300 focus:ring-3 focus:ring-gray-200/50 active:bg-gray-200',
        'outline' => 'border border-gray-200 bg-white text-gray-700 hover:border-gray-300 hover:bg-gray-100 active:border-gray-200 active:bg-white',
    ][$variant] ?? $variantClasses['primary'];
    
    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-xs rounded',
        'md' => 'px-4 py-2 text-sm rounded-sm',
        'lg' => 'px-6 py-3 text-base rounded-sm',
    ][$size] ?? $sizeClasses['md'];
    
    $classes = $baseClasses . ' ' . $variantClasses . ' ' . $sizeClasses . ' ' . $class;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>