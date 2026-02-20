@php
if (!$dontNotify) {
    $tmpId = json_encode([
        'titleText' => trans('messages.updating'),
        'icon' => 'info',
        'timeout' => 5000,
    ]);
}
@endphp

<x-dashboard::button :color="$color"
    {{ $attributes->merge([
        'type' => 'submit',
    ]) }}
    onclick="{{ $dontNotify ? '' : 'SwalAlert(' . $tmpId . ')' }}">
    @if (strlen($slot) > 0)
        {!! $slot !!}
    @else
        حفظ
    @endif
</x-dashboard::button>
