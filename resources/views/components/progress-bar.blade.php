{{-- text upper progress bar --}}
<x-dashboard::flex class="text-muted small"
    x="between">
    <div>
        @isset($topStart)
            {{ $topStart }}
        @endisset
    </div>
    <div>
        @isset($topEnd)
            {{ $topEnd }}
        @endisset
    </div>
</x-dashboard::flex>

{{-- Progress bar itself --}}
<div {{ $attributes->merge([
    'class' => 'progress progress-sm mb-1',
]) }}>
    <div aria-valuemax="100"
        aria-valuemin="0"
        aria-valuenow="{{ $attributes->get('value') }}"
        class="progress-bar bg-{{ $attributes->get('color', 'primary') }}"
        style="width: {{ $attributes->get('value') }}%"
        role="progressbar"></div>
</div>

{{-- text below progress bar --}}
<x-dashboard::flex class="text-muted small"
    x="between">
    <div>
        @isset($bottomStart)
            {{ $bottomStart }}
        @endisset
    </div>
    <div>
        @isset($bottomEnd)
            {{ $bottomEnd }}
        @endisset
    </div>
</x-dashboard::flex>
