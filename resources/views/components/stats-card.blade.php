@props([
    'title',
    'value',
    'trend' => null,
    'trendUp' => true,
    'icon' => 'fad fa-chart-line',
    'color' => 'indigo',
    'numClass' => 'num-4'
])

<!-- card -->
<div {{ $attributes->merge(['class' => 'report-card']) }}>
    <div class="card">
        <div class="card-body flex flex-col">

            <!-- top -->
            <div class="flex flex-row justify-between items-center">
                <div class="h6 text-{{ $color }}-700 {{ $icon }}"></div>
                @if($trend)
                <span class="rounded-full text-white badge bg-{{ $trendUp ? 'teal' : 'red' }}-400 text-xs">
                    {{ $trend }}
                    <i class="fal fa-chevron-{{ $trendUp ? 'up' : 'down' }} ml-1"></i>
                </span>
                @endif
            </div>
            <!-- end top -->

            <!-- bottom -->
            <div class="mt-8">
                <h1 class="h5 {{ $numClass }}">{{ $value }}</h1>
                <p>{{ $title }}</p>
            </div>
            <!-- end bottom -->

        </div>
    </div>
    <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
</div>
<!-- end card -->
