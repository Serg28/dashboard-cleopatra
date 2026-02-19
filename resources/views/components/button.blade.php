@props([
    'color' => null,
    'shadow' => false,
    'type' => 'button',
    'href' => null,
])

@php
    $class = $shadow ? 'btn-shadow' : 'btn';
    if ($color) {
        $class = 'btn-' . $color;
    }
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }} wire:navigate>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif
