@props([
    'disabled' => false,
    'error' => null,
])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'input textarea' . ($error ? ' input-error' : '')]) !!}>{{ $slot }}</textarea>
@if($error)
    <p class="input-error-text">{{ $error }}</p>
@endif
