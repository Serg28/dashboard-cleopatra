@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-4 gap-6 xl:grid-cols-2 lg:grid-cols-1">
    <x-dashboard-cleopatra-stats-card
        title="Загальний дохід"
        value="$128,430"
        trend="+12.5%"
        icon="fad fa-dollar-sign text-indigo-700"
        color="indigo"
    />
    <x-dashboard-cleopatra-stats-card
        title="Нові замовлення"
        value="1,432"
        trend="+5.3%"
        icon="fad fa-shopping-basket text-green-700"
        color="green"
    />
    <x-dashboard-cleopatra-stats-card
        title="Нові клієнти"
        value="892"
        trend="+8.2%"
        icon="fad fa-user-friends text-blue-700"
        color="blue"
    />
    <x-dashboard-cleopatra-stats-card
        title="Товари"
        value="450"
        trend="-1.5%"
        trendUp="false"
        icon="fad fa-box-open text-red-700"
        color="red"
    />
</div>

<div class="mt-6">
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Останні замовлення</x-slot>
        <x-dashboard-cleopatra-table>
            <x-dashboard-cleopatra-thead>
                <x-dashboard-cleopatra-th>ID</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Клієнт</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Товар</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Сума</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Статус</x-dashboard-cleopatra-th>
            </x-dashboard-cleopatra-thead>
            <tbody>
                <x-dashboard-cleopatra-tr>
                    <x-dashboard-cleopatra-td>#ORD-5432</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>Іван Іванов</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>iPhone 13 Pro</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td class="font-bold">$999</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>
                        <x-dashboard-cleopatra-badge color="green">Доставлено</x-dashboard-cleopatra-badge>
                    </x-dashboard-cleopatra-td>
                </x-dashboard-cleopatra-tr>
                <x-dashboard-cleopatra-tr>
                    <x-dashboard-cleopatra-td>#ORD-5433</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>Марія Петренко</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>MacBook Air M2</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td class="font-bold">$1,199</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>
                        <x-dashboard-cleopatra-badge color="yellow">В обробці</x-dashboard-cleopatra-badge>
                    </x-dashboard-cleopatra-td>
                </x-dashboard-cleopatra-tr>
            </tbody>
        </x-dashboard-cleopatra-table>
    </x-dashboard-cleopatra-card>
</div>
@endsection
