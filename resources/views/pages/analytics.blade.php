@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4">
        <div>
            <div class="flex items-center gap-3 mb-1">
                <h1 class="text-2xl lg:text-3xl font-bold text-foreground tracking-tight">Панель керування</h1>
                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium bg-primary/10 text-primary rounded-full">
                    Live
                </span>
            </div>
            <p class="text-sm text-muted-foreground">Огляд ваших фінансових показників</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center gap-2 flex-wrap">
            <button class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium bg-card border border-border rounded-lg text-foreground hover:bg-muted/50 hover:border-primary/20 transition-all duration-200 group">
                <i class="ri-calendar-2-line text-muted-foreground group-hover:text-primary transition-colors"></i>
                <span>20 Січ - 09 Лют, 2026</span>
                <i class="ri-arrow-down-s-line text-muted-foreground"></i>
            </button>

            <button class="inline-flex items-center gap-2 px-3 py-2 text-sm font-medium bg-card border border-border rounded-lg text-foreground hover:bg-muted/50 hover:border-primary/20 transition-all duration-200 group">
                <i class="ri-filter-3-line text-muted-foreground group-hover:text-primary transition-colors"></i>
                <span>Фільтр</span>
            </button>

            <x-dashboard-cleopatra-button variant="default" class="font-semibold">
                <i class="ri-download-cloud-2-line"></i>
                <span>Завантажити звіт</span>
            </x-dashboard-cleopatra-button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <x-dashboard-cleopatra-stats-card
            title="Загальний дохід"
            value="$45,231.89"
            trend="20.1%"
            icon="ri-money-dollar-circle-line"
            color="primary"
        />
        <x-dashboard-cleopatra-stats-card
            title="Підписки"
            value="+2,350"
            trend="180.1%"
            icon="ri-user-follow-line"
            color="primary"
        />
        <x-dashboard-cleopatra-stats-card
            title="Показник відмов"
            value="12.5%"
            trend="4.0%"
            trendUp="false"
            icon="ri-cursor-line"
            color="primary"
        />
        <x-dashboard-cleopatra-stats-card
            title="Активні зараз"
            value="+573"
            trend="201"
            icon="ri-pulse-line"
            color="primary"
        />
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Revenue Overview -->
        <div class="lg:col-span-2">
            <x-dashboard-cleopatra-card>
                <x-slot name="header">
                    <h4 class="font-semibold text-foreground">Огляд доходів</h4>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-1 text-xs font-medium rounded-md bg-primary/10 text-primary">Огляд</button>
                        <button class="px-3 py-1 text-xs font-medium rounded-md text-muted-foreground hover:bg-muted transition-colors">Аналітика</button>
                    </div>
                </x-slot>
                <div id="revenue-chart" class="h-80 w-full mt-4"></div>
            </x-dashboard-cleopatra-card>
        </div>

        <!-- Sales by Country -->
        <div>
            <x-dashboard-cleopatra-card>
                <x-slot name="header">
                    <h4 class="font-semibold text-foreground">Продажі за країнами</h4>
                </x-slot>
                <div class="space-y-4 mt-2">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🇺🇸</span>
                            <span class="text-sm font-medium">США</span>
                        </div>
                        <span class="text-sm font-bold">45%</span>
                    </div>
                    <div class="w-full bg-muted rounded-full h-1.5">
                        <div class="bg-primary h-1.5 rounded-full" style="width: 45%"></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🇬🇧</span>
                            <span class="text-sm font-medium">Великобританія</span>
                        </div>
                        <span class="text-sm font-bold">28%</span>
                    </div>
                    <div class="w-full bg-muted rounded-full h-1.5">
                        <div class="bg-primary h-1.5 rounded-full" style="width: 28%"></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="text-xl">🇩🇪</span>
                            <span class="text-sm font-medium">Німеччина</span>
                        </div>
                        <span class="text-sm font-bold">15%</span>
                    </div>
                    <div class="w-full bg-muted rounded-full h-1.5">
                        <div class="bg-primary h-1.5 rounded-full" style="width: 15%"></div>
                    </div>
                </div>
                <x-slot name="footer">
                    <button class="text-xs text-primary font-medium hover:underline">Переглянути повний звіт</button>
                </x-slot>
            </x-dashboard-cleopatra-card>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    var options = {
        series: [{
            name: 'Дохід',
            data: [31, 40, 28, 51, 42, 109, 100, 120, 80, 90, 110, 150]
        }],
        chart: {
            height: 320,
            type: 'area',
            toolbar: { show: false },
            fontFamily: 'Inter, sans-serif'
        },
        colors: ['#000'],
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.45,
                opacityTo: 0.05,
                stops: [20, 100, 100, 100]
            }
        },
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth', width: 2 },
        xaxis: {
            categories: ["Січ", "Лют", "Бер", "Квіт", "Трав", "Черв", "Лип", "Серп", "Вер", "Жовт", "Лист", "Груд"],
            axisBorder: { show: false },
            axisTicks: { show: false }
        },
        yaxis: {
            labels: {
                formatter: function (val) { return "$" + val + "k" }
            }
        },
        grid: {
            borderColor: '#f1f1f1',
            strokeDashArray: 4
        }
    };

    var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);
    chart.render();
</script>
@endpush
