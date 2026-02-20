<x-dashboard::button :color="$color" :inline="true" {{ $attributes->merge([
    'href' => '#',
]) }}>
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        عودة
    @endif
</x-dashboard::button>
