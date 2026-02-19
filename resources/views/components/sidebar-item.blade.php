@props([
    'href' => '#',
    'active' => false,
    'icon' => null,
])

<a href="{{ $href }}"
    wire:navigate
    @class([
        'flex gap-2 items-center font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500',
        'text-teal-700 font-bold' => $active,
        'mb-3' => true,
    ])>
    @if($icon)
        <i class="{{ $icon }} w-4 text-center"></i>
    @endif
    {{ $slot }}
</a>
