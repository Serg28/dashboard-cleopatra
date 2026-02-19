@props([
    'color' => 'indigo',
    'size' => 'md',
    'type' => 'button',
])

@php
    $colors = [
        'indigo' => 'bg-indigo-700 hover:bg-indigo-800 text-white',
        'teal' => 'bg-teal-700 hover:bg-teal-800 text-white',
        'red' => 'bg-red-700 hover:bg-red-800 text-white',
        'green' => 'bg-green-700 hover:bg-green-800 text-white',
        'blue' => 'bg-blue-700 hover:bg-blue-800 text-white',
        'yellow' => 'bg-yellow-600 hover:bg-yellow-700 text-white',
        'gray' => 'bg-gray-600 hover:bg-gray-700 text-white',
        'light' => 'bg-gray-100 hover:bg-gray-200 text-gray-800',
        'dark' => 'bg-gray-900 hover:bg-black text-white',
    ];

    $sizes = [
        'sm' => 'px-3 py-1 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $classes = "inline-flex items-center justify-center font-semibold rounded transition ease-in-out duration-300 " . ($colors[$color] ?? $colors['indigo']) . " " . ($sizes[$size] ?? $sizes['md']);
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
