@props([
    'title',
    'value',
    'trend' => null,
    'trendUp' => true,
    'icon' => 'ri-line-chart-line',
    'color' => 'primary',
])

<div {{ $attributes->merge(['class' => 'bg-card border border-border rounded-xl p-5 shadow-sm hover:shadow-md hover:border-primary/20 transition-all duration-200']) }}>
    <div class="flex items-center justify-between">
        <p class="text-sm font-medium text-muted-foreground">{{ $title }}</p>
        <div class="p-2 bg-{{ $color }}/10 rounded-lg">
            <i class="{{ $icon }} text-{{ $color }} text-lg"></i>
        </div>
    </div>
    <div class="mt-3">
        <p class="text-2xl font-bold text-foreground">{{ $value }}</p>
        @if($trend)
            <div class="flex items-center gap-2 mt-1">
                <span class="inline-flex items-center gap-1 text-xs font-medium {{ $trendUp ? 'text-emerald-600 dark:text-emerald-400' : 'text-destructive' }}">
                    {{ $trendUp ? '+' : '-' }}{{ $trend }}
                </span>
                <span class="text-xs text-muted-foreground">vs last month</span>
            </div>
        @endif
    </div>
</div>
