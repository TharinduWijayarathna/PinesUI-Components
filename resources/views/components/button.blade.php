@php
    $baseClasses = "inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 rounded-md focus:ring-2 focus:ring-offset-2 focus:shadow-outline focus:outline-none";

    $colorClasses = match($color) {
        'neutral' => 'text-white bg-neutral-950 hover:bg-neutral-900 focus:ring-neutral-900',
        'blue' => 'text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-700',
        'red' => 'text-white bg-red-600 hover:bg-red-700 focus:ring-red-700',
        'green' => 'text-white bg-green-600 hover:bg-green-700 focus:ring-green-700',
        'yellow' => 'text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-600',
        'white' => 'text-neutral-500 bg-white border border-neutral-200/70 hover:text-neutral-700 hover:bg-neutral-100 active:bg-white focus:ring-neutral-200/60',
        default => 'text-white bg-neutral-950 hover:bg-neutral-900 focus:ring-neutral-900',
    };

    $sizeClasses = match($size) {
        'sm' => 'px-3 py-1 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
        default => 'px-4 py-2 text-sm',
    };

    $classes = "{$baseClasses} {$colorClasses} {$sizeClasses}";
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
