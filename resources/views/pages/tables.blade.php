@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-1 gap-6">
    {{-- Проста таблиця --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Проста таблиця</x-slot>
        <x-dashboard-cleopatra::table>
            <x-dashboard-cleopatra::thead>
                <x-dashboard-cleopatra::th>Ім'я</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Роль</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Статус</x-dashboard-cleopatra::th>
                <x-dashboard-cleopatra::th>Дії</x-dashboard-cleopatra::th>
            </x-dashboard-cleopatra::thead>
            <tbody>
                <x-dashboard-cleopatra::tr>
                    <x-dashboard-cleopatra::td>Микола Сидоренко</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>Адмін</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td><x-dashboard-cleopatra::badge color="green">Активний</x-dashboard-cleopatra::badge></x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>
                        <x-dashboard-cleopatra::button size="sm" color="indigo">Редагувати</x-dashboard-cleopatra::button>
                    </x-dashboard-cleopatra::td>
                </x-dashboard-cleopatra::tr>
                <x-dashboard-cleopatra::tr>
                    <x-dashboard-cleopatra::td>Олена Коваль</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>Редактор</x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td><x-dashboard-cleopatra::badge color="yellow">Очікування</x-dashboard-cleopatra::badge></x-dashboard-cleopatra::td>
                    <x-dashboard-cleopatra::td>
                        <x-dashboard-cleopatra::button size="sm" color="indigo">Редагувати</x-dashboard-cleopatra::button>
                    </x-dashboard-cleopatra::td>
                </x-dashboard-cleopatra::tr>
            </tbody>
        </x-dashboard-cleopatra::table>
    </x-dashboard-cleopatra::card>
</div>
@endsection
