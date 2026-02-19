@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-4 gap-6 xl:grid-cols-2 lg:grid-cols-1">
    {{-- Статистика продажів --}}
    <x-dashboard-cleopatra::card class="border-t-4 border-indigo-500">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-indigo-100 text-indigo-600 mr-4">
                <i class="fad fa-dollar-sign fa-2x"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Загальний дохід</p>
                <p class="text-2xl font-bold">$128,430</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card class="border-t-4 border-green-500">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                <i class="fad fa-shopping-basket fa-2x"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Нові замовлення</p>
                <p class="text-2xl font-bold">1,432</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card class="border-t-4 border-blue-500">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                <i class="fad fa-user-friends fa-2x"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Нові клієнти</p>
                <p class="text-2xl font-bold">892</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card class="border-t-4 border-red-500">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-red-100 text-red-600 mr-4">
                <i class="fad fa-box-open fa-2x"></i>
            </div>
            <div>
                <p class="text-sm text-gray-500 uppercase font-bold">Товари в наявності</p>
                <p class="text-2xl font-bold">450</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>
</div>

{{-- Останні замовлення --}}
<div class="mt-6">
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Останні замовлення</x-slot>

        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-400 uppercase text-xs">
                    <th class="py-3 px-4">ID замовлення</th>
                    <th class="py-3 px-4">Клієнт</th>
                    <th class="py-3 px-4">Товар</th>
                    <th class="py-3 px-4">Сума</th>
                    <th class="py-3 px-4">Статус</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="border-t border-gray-200">
                    <td class="py-4 px-4">#ORD-5432</td>
                    <td class="py-4 px-4">Іван Іванов</td>
                    <td class="py-4 px-4">iPhone 13 Pro</td>
                    <td class="py-4 px-4 font-bold">$999</td>
                    <td class="py-4 px-4">
                        <x-dashboard-cleopatra::badge color="green">Доставлено</x-badge>
                    </td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td class="py-4 px-4">#ORD-5433</td>
                    <td class="py-4 px-4">Марія Петренко</td>
                    <td class="py-4 px-4">MacBook Air M2</td>
                    <td class="py-4 px-4 font-bold">$1,199</td>
                    <td class="py-4 px-4">
                        <x-dashboard-cleopatra::badge color="yellow">В обробці</x-badge>
                    </td>
                </tr>
            </tbody>
        </table>
    </x-dashboard-cleopatra::card>
</div>
@endsection
