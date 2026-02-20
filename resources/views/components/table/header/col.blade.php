@props(['last' => false, 'first' => false])

<th {{ $attributes->except('class')->merge([]) }}
    @class([
        'px-4 py-2 font-normal ' . dashboard_rtl('text-right', 'text-left'),
        dashboard_rtl('border-r', 'border-l') => !$first,
        dashboard_rtl('border-l-0', 'border-r-0') => $last,
    ])>
    {!! $slot !!}
</th>
