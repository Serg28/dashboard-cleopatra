@props([
    'title',
    'value',
    'trend' => null,
    'trendUp' => true,
    'icon' => 'fad fa-chart-line',
    'color' => 'indigo',
])

<div class="report-card">
    <div class="card bg-white border border-gray-300 rounded shadow-sm">
        <div class="card-body p-6 flex flex-col">
            <div class="flex flex-row justify-between items-center">
                <div class="h6 text-{{ $color }}-700 {{ $icon }}"></div>
                @if($trend)
                    <span class="rounded-full text-white badge bg-{{ $trendUp ? 'teal' : 'red' }}-400 text-xs px-2 py-1">
                        {{ $trend }} <i class="fal fa-chevron-{{ $trendUp ? 'up' : 'down' }} ml-1"></i>
                    </span>
                @endif
            </div>
            <div class="mt-8">
                <h1 class="text-2xl font-bold">{{ $value }}</h1>
                <p class="text-gray-500 text-sm font-semibold uppercase">{{ $title }}</p>
            </div>
        </div>
    </div>
    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
</div>
