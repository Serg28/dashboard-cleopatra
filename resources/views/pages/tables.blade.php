@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-1 gap-6">
    <div class="card">
        <div class="card-header">Recent Sales</div>

        <x-dashboard-cleopatra-table>
            <thead>
                <tr>
                    <x-dashboard-cleopatra-th></x-dashboard-cleopatra-th>
                    <x-dashboard-cleopatra-th>product</x-dashboard-cleopatra-th>
                    <x-dashboard-cleopatra-th>price</x-dashboard-cleopatra-th>
                    <th class="px-4 py-2">date</th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach([
                    ['status' => 'green', 'name' => 'Lightning to USB-C Adapter Lightning.', 'price' => '45', 'date' => '12 minutes ago'],
                    ['status' => 'yellow', 'name' => 'Apple iPhone 8.', 'price' => '899', 'date' => '45 minutes ago'],
                    ['status' => 'green', 'name' => 'Apple MacBook Pro.', 'price' => '1299', 'date' => '1 hour ago'],
                    ['status' => 'red', 'name' => 'Samsung Galaxy S9.', 'price' => '699', 'date' => '2 hours ago'],
                ] as $sale)
                <tr>
                    <td class="border border-l-0 px-4 py-2 text-center text-{{ $sale['status'] }}-500"><i class="fad fa-circle"></i></td>
                    <x-dashboard-cleopatra-td>{{ $sale['name'] }}</x-dashboard-cleopatra-td>
                    <x-dashboard-cleopatra-td>${{ $sale['price'] }}</x-dashboard-cleopatra-td>
                    <td class="border border-l-0 border-r-0 px-4 py-2">{{ $sale['date'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </x-dashboard-cleopatra-table>
    </div>
</div>
@endsection
