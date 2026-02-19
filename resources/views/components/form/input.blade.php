@props([
    'label' => null,
    'name' => null,
    'type' => 'text',
    'value' => null,
    'placeholder' => null,
    'required' => false,
])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-bold text-gray-700 mb-2">
            {{ $label }} @if($required)<span class="text-red-500">*</span>@endif
        </label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value ?? old($name) }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'w-full px-4 py-2 rounded border border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-300 outline-none']) }}
    >

    @error($name)
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
