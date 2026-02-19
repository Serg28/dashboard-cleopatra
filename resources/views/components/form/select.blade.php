@props([
    'disabled' => false,
    'error' => null,
    'options' => [],
])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'select-native' . ($error ? ' input-error' : '')]) !!}>
    {{ $slot }}
    @foreach($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>
@if($error)
    <p class="input-error-text">{{ $error }}</p>
@endif
