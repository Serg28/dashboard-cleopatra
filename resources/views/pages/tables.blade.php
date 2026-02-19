@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-1 gap-6">
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Таблиця користувачів</x-slot>
        <x-dashboard-cleopatra-table>
            <x-dashboard-cleopatra-thead>
                <x-dashboard-cleopatra-th>#</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Користувач</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Email</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Статус</x-dashboard-cleopatra-th>
                <x-dashboard-cleopatra-th>Дії</x-dashboard-cleopatra-th>
            </x-dashboard-cleopatra-thead>
            <tbody>
                @foreach([
                    ['id' => 1, 'name' => 'Олександр', 'email' => 'alex@example.com', 'status' => 'active', 'color' => 'green'],
                    ['id' => 2, 'name' => 'Марія', 'email' => 'maria@example.com', 'status' => 'pending', 'color' => 'yellow'],
                    ['id' => 3, 'name' => 'Дмитро', 'email' => 'dmitry@example.com', 'status' => 'inactive', 'color' => 'red'],
                ] as $user)
                <x-dashboard-cleopatra-tr>
                    <x-dashboard-cleopatra-td>{{ $user['id'] }}</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td class="font-semibold">{{ $user['name'] }}</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>{{ $user['email'] }}</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>
                        <x-dashboard-cleopatra-badge :color="$user['color']">{{ $user['status'] }}</x-dashboard-cleopatra-badge>
                    </x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>
                        <x-dashboard-cleopatra-button size="sm" class="mr-2"><i class="fad fa-edit"></i></x-dashboard-cleopatra-button>
                        <x-dashboard-cleopatra-button size="sm" color="red"><i class="fad fa-trash"></i></x-dashboard-cleopatra-button>
                    </x-dashboard-cleopatra-td>
                </x-dashboard-cleopatra-tr>
                @endforeach
            </tbody>
        </x-dashboard-cleopatra-table>
    </x-dashboard-cleopatra-card>
</div>
@endsection
