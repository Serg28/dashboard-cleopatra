@props([
    'label' => null,
    'name',
    'checked' => false,
])

<div class="flex items-center mb-4">
    <input
        type="checkbox"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 transition duration-300']) }}
    >
    @if($label)
        <label for="{{ $name }}" class="ml-2 block text-sm text-gray-700">
            {{ $label }}
        </label>
    @endif
</div>
