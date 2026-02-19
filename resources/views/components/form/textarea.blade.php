@props([
    'label' => null,
    'name' => null,
    'value' => null,
    'placeholder' => null,
    'rows' => 3,
    'required' => false,
])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-bold text-gray-700 mb-2">
            {{ $label }} @if($required)<span class="text-red-500">*</span>@endif
        </label>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'w-full px-4 py-2 rounded border border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition duration-300 outline-none']) }}
    >{{ $value ?? old($name) }}</textarea>

    @error($name)
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>
