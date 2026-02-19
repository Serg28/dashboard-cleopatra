@props([
    'disabled' => false,
    'error' => null,
])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input' . ($error ? ' input-error' : '')]) !!}>
@if($error)
    <p class="input-error-text">{{ $error }}</p>
@endif
