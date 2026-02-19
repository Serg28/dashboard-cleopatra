@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-4 gap-6 xl:grid-cols-2 lg:grid-cols-1">
    <x-dashboard-cleopatra-stats-card
        title="Замовлення"
        value="1,200"
        trend="12%"
        icon="fad fa-shopping-cart text-indigo-700"
        color="indigo"
    />
    <x-dashboard-cleopatra-stats-card
        title="Продажі"
        value="4,500"
        trend="6%"
        trendUp="false"
        icon="fad fa-store text-red-700"
        color="red"
    />
    <x-dashboard-cleopatra-stats-card
        title="Проекти"
        value="300"
        trend="72%"
        icon="fad fa-sitemap text-yellow-600"
        color="yellow"
    />
    <x-dashboard-cleopatra-stats-card
        title="Користувачі"
        value="150"
        trend="150%"
        icon="fad fa-users text-green-700"
        color="green"
    />
</div>

<div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Огляд продажів</x-slot>
        <div id="salesChart"></div>
    </x-dashboard-cleopatra-card>

    <x-dashboard-cleopatra-card>
        <x-slot name="header">Активність користувачів</x-slot>
        <div id="usersChart"></div>
    </x-dashboard-cleopatra-card>
</div>

<div class="mt-6">
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Популярні сторінки</x-slot>
        <x-dashboard-cleopatra-table>
            <x-dashboard-cleopatra-thead>
                <x-dashboard-cleopatra-th>Сторінка</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Відвідувачі</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Унікальні</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Час</x-dashboard-cleopatra-th>
            </x-dashboard-cleopatra-thead>
            <tbody>
                <x-dashboard-cleopatra-tr>
                    <x-dashboard-cleopatra-td>/index.html</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>12,430</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>8,500</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>00:05:12</x-dashboard-cleopatra-td>
                </x-dashboard-cleopatra-tr>
                <x-dashboard-cleopatra-tr>
                    <x-dashboard-cleopatra-td>/ecommerce.html</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>8,200</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>6,100</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>00:04:45</x-dashboard-cleopatra-td>
                </x-dashboard-cleopatra-tr>
            </tbody>
        </x-dashboard-cleopatra-table>
    </x-dashboard-cleopatra-card>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: { type: 'area', height: 300, toolbar: {show: false} },
        series: [{ name: 'Продажі', data: [30, 40, 35, 50, 49, 60, 70, 91, 125] }],
        xaxis: { categories: ['Січ', 'Лют', 'Бер', 'Квіт', 'Трав', 'Черв', 'Лип', 'Серп', 'Вер'] }
    };
    new ApexCharts(document.querySelector("#salesChart"), options).render();

    var options2 = {
        chart: { type: 'bar', height: 300, toolbar: {show: false} },
        series: [{ name: 'Користувачі', data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200] }],
        xaxis: { categories: ['Січ', 'Лют', 'Бер', 'Квіт', 'Трав', 'Черв', 'Лип', 'Серп', 'Вер'] }
    };
    new ApexCharts(document.querySelector("#usersChart"), options2).render();
</script>
@endpush
