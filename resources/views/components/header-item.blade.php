@props([
    'href' => '#',
    'title' => '',
    'icon' => null,
])

<a href="{{ $href }}"
    class="mr-2 transition duration-500 ease-in-out hover:text-gray-900"
    title="{{ $title }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
