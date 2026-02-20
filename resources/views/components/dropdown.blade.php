<div class="dropdown relative md:static">
    <x-dashboard::button :color="$color">
        @isset($custom)
            {!! $custom !!}
        @else
            @isset($title)
                {!! $title !!}
            @endisset

            <i class="fad fa-chevron-down {{ dashboard_rtl('mr-2', 'ml-2') }} text-xs leading-none"></i>
        @endisset
    </x-dashboard::button>
    {{-- <button @class([
        'menu-btn p-0 m-0 focus:outline-none transition-all ease-in-out duration-300 flex items-center',
        'text-gray-500 hover:text-gray-900 focus:text-gray-900' =>
            !isset($active) || !$active,
        'text-indigo-500 hover:text-indigo-900 focus:text-indigo-900' =>
            isset($active) && $active,
    ])>

        @isset($custom)
            {!! $custom !!}
        @else
            @isset($title)
                {!! $title !!}
            @endisset

            <i class="fad fa-chevron-down {{ dashboard_rtl('mr-2', 'ml-2') }} text-xs leading-none"></i>
        @endisset

    </button> --}}

    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

    <div
        class="menu hidden rounded bg-white md:w-full shadow-md absolute z-20 {{ dashboard_rtl('md:left-0 left-0', 'md:right-0 right-0') }} w-84 mt-5 py-2 animated faster">
        {!! $slot !!}
    </div>
</div>

{{-- $attributes->merge([
    'color' => $attributes->get('color'),
    'outline' => $attributes->get('outline'),
]) --}}
