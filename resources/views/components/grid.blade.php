<div {{ $attributes->merge(['class' => "grid grid-flow-col grid-cols-{$cols} grid-rows-{$rows} gap-{$gap}"]) }}>
    {!! $slot !!}
</div>
