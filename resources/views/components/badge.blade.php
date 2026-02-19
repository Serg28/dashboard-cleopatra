@props([
    'variant' => 'default', // default, outline, secondary, success, warning, destructive
    'size' => 'default',    // default
])

@php
    $classes = ['badge'];

    if ($variant !== 'default') {
        $classes[] = 'badge-' . $variant;
    } else {
        $classes[] = 'badge-primary';
    }

    $classString = implode(' ', $classes);
@endphp

<span {{ $attributes->merge(['class' => $classString]) }}>
    {{ $slot }}
</span>
