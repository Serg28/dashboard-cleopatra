@props([
    'color' => 'indigo',
    'outline' => false,
])

@php
    $class = $outline ? 'btn-outline' : 'btn';
    if ($color) {
        $class .= '-' . $color;
    }
@endphp

<button {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</button>
