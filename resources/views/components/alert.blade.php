@props([
    'variant' => 'info', // info, success, warning, destructive
    'dismissible' => false,
    'title' => null,
    'icon' => null,
])

@php
    $classes = ['flex items-start gap-3 p-4 rounded-xl border'];

    $variants = [
        'info' => 'border-info/20 bg-info/5 text-info',
        'success' => 'border-success/20 bg-success/5 text-success',
        'warning' => 'border-warning/20 bg-warning/5 text-warning',
        'destructive' => 'border-destructive/20 bg-destructive/5 text-destructive',
    ];

    $classes[] = $variants[$variant] ?? $variants['info'];
    $classString = implode(' ', $classes);

    $defaultIcons = [
        'info' => 'ri-information-line',
        'success' => 'ri-checkbox-circle-line',
        'warning' => 'ri-error-warning-line',
        'destructive' => 'ri-alert-line',
    ];

    $icon = $icon ?? $defaultIcons[$variant] ?? 'ri-information-line';
@endphp

<div {{ $attributes->merge(['class' => $classString]) }} x-data="{ show: true }" x-show="show">
    <i class="{{ $icon }} text-lg mt-0.5"></i>

    <div class="flex-1">
        @if($title)
            <p class="text-sm font-bold">{{ $title }}</p>
        @endif
        <div class="text-sm opacity-90 {{ $title ? 'mt-1' : '' }}">
            {{ $slot }}
        </div>
    </div>

    @if($dismissible)
        <button @click="show = false" class="text-current opacity-50 hover:opacity-100 transition-opacity">
            <i class="ri-close-line text-lg"></i>
        </button>
    @endif
</div>
