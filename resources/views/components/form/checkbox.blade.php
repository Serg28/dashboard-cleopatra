@props([
    'disabled' => false,
    'label' => null,
    'description' => null,
    'size' => 'default', // default, sm, lg
    'color' => 'primary', // primary, success, warning, destructive
])

@php
    $inputClasses = ['checkbox'];
    if ($size !== 'default') $inputClasses[] = 'checkbox-' . $size;
    if ($color !== 'primary') $inputClasses[] = 'checkbox-' . $color;
    $inputClassString = implode(' ', $inputClasses);
@endphp

<div class="checkbox-wrapper">
    <div class="flex items-start gap-2">
        <input type="checkbox" {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $inputClassString]) }}>
        @if($label || $description)
            <div class="flex flex-col">
                @if($label)
                    <label for="{{ $attributes->get('id') }}" class="checkbox-label">{{ $label }}</label>
                @endif
                @if($description)
                    <p class="checkbox-description">{{ $description }}</p>
                @endif
            </div>
        @endif
    </div>
</div>
