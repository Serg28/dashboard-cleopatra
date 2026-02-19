@props([
    'disabled' => false,
    'label' => null,
])

<div class="checkbox-wrapper">
    <input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'checkbox']) !!}>
    @if($label)
        <label class="checkbox-label" for="{{ $attributes->get('id') }}">
            {{ $label }}
        </label>
    @endif
</div>
