@props([
    'variant' => 'default', // default, secondary, destructive, outline, ghost, link
    'size' => 'default',    // default, sm, lg, xl
    'icon' => false,
    'full' => false,
    'loading' => false,
    'type' => 'button',
    'href' => null,
])

@php
    $classes = ['btn'];

    if ($variant !== 'default') {
        $classes[] = 'btn-' . $variant;
    } else {
        $classes[] = 'btn-primary'; // In 2.0 default is primary
    }

    if ($size !== 'default') {
        $classes[] = 'btn-' . $size;
    }

    if ($icon) $classes[] = 'btn-icon';
    if ($full) $classes[] = 'btn-full';
    if ($loading) $classes[] = 'btn-loading';

    $classString = implode(' ', $classes);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classString]) }} wire:navigate>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classString]) }}>
        {{ $slot }}
    </button>
@endif
