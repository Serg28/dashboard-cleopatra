@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-3 gap-6 lg:grid-cols-1">
    {{-- Курс валют --}}
    <x-dashboard-cleopatra::card class="col-span-1">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-orange-100 text-orange-500 mr-4">
                    <i class="fab fa-bitcoin fa-2x"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Bitcoin</h2>
                    <p class="text-gray-500 text-sm">BTC / USD</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-xl font-bold">$42,350.12</p>
                <p class="text-green-500 text-sm">+2.4%</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card class="col-span-1">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500 mr-4">
                    <i class="fab fa-ethereum fa-2x"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Ethereum</h2>
                    <p class="text-gray-500 text-sm">ETH / USD</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-xl font-bold">$2,250.45</p>
                <p class="text-red-500 text-sm">-1.2%</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card class="col-span-1">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-500 mr-4">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                </div>
                <div>
                    <h2 class="text-xl font-bold">Tether</h2>
                    <p class="text-gray-500 text-sm">USDT / USD</p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-xl font-bold">$1.00</p>
                <p class="text-gray-500 text-sm">0.0%</p>
            </div>
        </div>
    </x-dashboard-cleopatra::card>
</div>

<div class="mt-6 grid grid-cols-2 gap-6 lg:grid-cols-1">
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Графік ціни BTC</x-slot>
        <div id="cryptoChart" style="min-height: 350px;"></div>
    </x-dashboard-cleopatra::card>

    <x-dashboard-cleopatra::card>
        <x-slot name="header">Ваш портфель</x-slot>
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center text-orange-500 mr-3">
                        <i class="fab fa-bitcoin"></i>
                    </div>
                    <span>Bitcoin</span>
                </div>
                <div class="text-right">
                    <p class="font-bold">0.45 BTC</p>
                    <p class="text-sm text-gray-500">$19,057.55</p>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-500 mr-3">
                        <i class="fab fa-ethereum"></i>
                    </div>
                    <span>Ethereum</span>
                </div>
                <div class="text-right">
                    <p class="font-bold">12.5 ETH</p>
                    <p class="text-sm text-gray-500">$28,130.62</p>
                </div>
            </div>
        </div>
    </x-dashboard-cleopatra::card>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: 'BTC Price',
            data: [35000, 38000, 36500, 42000, 40000, 42350]
        }],
        chart: {
            type: 'line',
            height: 350,
            toolbar: { show: false }
        },
        stroke: { curve: 'smooth' },
        xaxis: {
            categories: ['10:00', '11:00', '12:00', '13:00', '14:00', '15:00']
        }
    };
    var chart = new ApexCharts(document.querySelector("#cryptoChart"), options);
    chart.render();
</script>
@endpush
