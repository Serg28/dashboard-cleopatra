<div {{ $attributes->merge(['class' => 'bg-card text-card-foreground rounded-xl border border-border shadow-sm overflow-hidden']) }}>
    @isset($header)
        <div class="px-6 py-4 border-b border-border bg-muted/20 flex items-center justify-between">
            <div class="text-sm font-semibold text-foreground">
                {{ $header }}
            </div>
        </div>
    @endisset

    <div class="p-6">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="px-6 py-4 border-t border-border bg-muted/10">
            {{ $footer }}
        </div>
    @endisset
</div>
