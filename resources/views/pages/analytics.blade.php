@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-4 gap-6 xl:grid-cols-2 lg:grid-cols-1">
    <x-dashboard-cleopatra::stats-card
        title="Відвідувачі"
        value="45,780"
        trend="+12.5%"
        icon="fad fa-eye"
        color="indigo"
    />
    <x-dashboard-cleopatra::stats-card
        title="Перегляди сторінок"
        value="120,430"
        trend="+8.2%"
        icon="fad fa-layer-group"
        color="blue"
    />
    <x-dashboard-cleopatra::stats-card
        title="Час на сайті"
        value="00:04:30"
        trend="-2.1%"
        trendUp="false"
        icon="fad fa-clock"
        color="teal"
    />
    <x-dashboard-cleopatra::stats-card
        title="Показник відмов"
        value="42.3%"
        trend="+1.5%"
        icon="fad fa-external-link-alt"
        color="red"
    />
</div>

<div class="mt-6 grid grid-cols-3 gap-6 xl:grid-cols-1">
    <div class="col-span-2 xl:col-span-1">
        <x-dashboard-cleopatra::card>
            <x-slot name="header">Аналітика трафіку</x-slot>
            <div id="trafficChart" style="min-height: 350px;"></div>
        </x-dashboard-cleopatra::card>
    </div>
    <div class="col-span-1">
        <x-dashboard-cleopatra::card>
            <x-slot name="header">Джерела трафіку</x-slot>
            <div id="sourceChart" style="min-height: 350px;"></div>
        </x-dashboard-cleopatra::card>
    </div>
</div>

<div class="mt-6">
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Популярні сторінки</x-slot>
        <x-dashboard-cleopatra::table>
            <x-dashboard-cleopatra::thead>
                <x-dashboard-cleopatra::th>Сторінка</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Відвідувачі</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Унікальні</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Час</x-dashboard-cleopatra::th>
            </x-dashboard-cleopatra::thead>
            <tbody>
                <tr>
                    <x-dashboard-cleopatra::td>/index.html</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>12,430</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>8,500</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>00:05:12</x-dashboard-cleopatra::td>
                </tr>
                <tr>
                    <x-dashboard-cleopatra::td>/ecommerce.html</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>8,200</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>6,100</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>00:04:45</x-dashboard-cleopatra::td>
                </tr>
            </tbody>
        </x-dashboard-cleopatra::table>
    </x-dashboard-cleopatra::card>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var trafficOptions = {
        series: [{
            name: 'Відвідувачі',
            data: [31, 40, 28, 51, 42, 109, 100]
        }],
        chart: {
            height: 350,
            type: 'area',
            toolbar: { show: false }
        },
        dataLabels: { enabled: false },
        stroke: { curve: 'smooth' },
        xaxis: {
            categories: ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Нд"]
        },
    };
    var trafficChart = new ApexCharts(document.querySelector("#trafficChart"), trafficOptions);
    trafficChart.render();

    var sourceOptions = {
        series: [44, 55, 13, 43],
        chart: {
            type: 'donut',
            height: 350
        },
        labels: ['Direct', 'Social', 'Email', 'Referral'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: { width: 200 },
                legend: { position: 'bottom' }
            }
        }]
    };
    var sourceChart = new ApexCharts(document.querySelector("#sourceChart"), sourceOptions);
    sourceChart.render();
</script>
@endpush
