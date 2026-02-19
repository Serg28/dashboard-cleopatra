@props([
    'title' => null,
    'color' => 'light',
])

<div class="dropdown relative md:static" x-data="{ open: false }">
    <button @click="open = !open" type="button" @class([
        'inline-flex items-center justify-center font-semibold rounded transition ease-in-out duration-300 px-4 py-2 text-sm',
        'bg-gray-100 hover:bg-gray-200 text-gray-800' => $color === 'light',
        'bg-indigo-700 hover:bg-indigo-800 text-white' => $color === 'indigo',
    ])>
        @isset($custom)
            {{ $custom }}
        @else
            {{ $title }}
            <i class="fad fa-chevron-down ml-2 text-xs"></i>
        @endisset
    </button>

    <div x-show="open" @click.away="open = false"
        class="absolute z-20 mt-2 w-48 rounded bg-white shadow-md py-2 animated faster"
        style="display: none;">
        {{ $slot }}
    </div>
</div>
