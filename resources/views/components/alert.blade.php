@props([
    'color' => null,
    'dismissible' => false,
])

@php
    $colorClass = $color ? 'alert-' . $color : '';
    $dismissClass = $dismissible ? 'alert-close' : '';
@endphp

<div {{ $attributes->merge(['class' => "alert $colorClass $dismissClass"]) }} x-data="{ show: true }" x-show="show">
    @if($dismissible)
        <button @click="show = false" class="alert-btn-close">
            <i class="fad fa-times"></i>
        </button>
    @endif
    <span>{{ $slot }}</span>
</div>
