<a {{ $attributes->except('class')->merge([
    'href' => $attributes->get('href', 'javascript:void(0);'),
]) }}
    @class([
        'flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide transition-all duration-300 ease-in-out',
        'bg-white hover:bg-gray-200' => !isset($active) || !$active,
        'bg-indigo-300 hover:bg-indigo-500 text-white' => isset($active) && $active,
    ])>

    {!! $slot !!}
</a>

@unless($hideHr)
    <hr>
@endunless
