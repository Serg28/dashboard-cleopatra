@props([
    'color' => 'indigo',
    'dismissible' => true,
])

@php
    $colors = [
        'indigo' => 'bg-indigo-100 border-indigo-200 text-indigo-700',
        'teal' => 'bg-teal-100 border-teal-200 text-teal-700',
        'red' => 'bg-red-100 border-red-200 text-red-700',
        'green' => 'bg-green-100 border-green-200 text-green-700',
        'blue' => 'bg-blue-100 border-blue-200 text-blue-700',
        'yellow' => 'bg-yellow-100 border-yellow-200 text-yellow-700',
    ];

    $classes = "p-4 border rounded relative " . ($colors[$color] ?? $colors['indigo']);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} role="alert" x-data="{ show: true }" x-show="show">
    {{ $slot }}

    @if($dismissible)
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
            <i class="fad fa-times text-sm"></i>
        </button>
    @endif
</div>
