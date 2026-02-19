@extends('dashboard-cleopatra::layouts.full')

@section('content')
    <!-- General Report -->
    <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
        <x-dashboard-cleopatra-stats-card
            title="items sales"
            value="1,200"
            trend="12%"
            icon="fad fa-shopping-cart"
            color="indigo"
        />
        <x-dashboard-cleopatra-stats-card
            title="new orders"
            value="4,500"
            trend="6%"
            trendUp="false"
            icon="fad fa-store"
            color="red"
        />
        <x-dashboard-cleopatra-stats-card
            title="total Products"
            value="300"
            trend="72%"
            icon="fad fa-sitemap"
            color="yellow"
        />
        <x-dashboard-cleopatra-stats-card
            title="new Visitor"
            value="150"
            trend="150%"
            icon="fad fa-users"
            color="green"
        />
    </div>
    <!-- End General Report -->

    <!-- strat Analytics -->
    <div class="mt-6 grid grid-cols-2 gap-6 xl:grid-cols-1">

        <!-- update section -->
        <div class="card bg-teal-400 border-teal-400 shadow-md text-white">
            <div class="card-body flex flex-row">

                <!-- image -->
                <div class="img-wrapper w-40 h-40 flex justify-center items-center">
                    <img src="{{ asset('vendor/dashboard-cleopatra/img/happy.svg') }}" alt="img title">
                </div>
                <!-- end image -->

                <!-- info -->
                <div class="py-2 ml-10">
                    <h1 class="h6">Гарна робота, {{ auth()->user()->name ?? 'Користувач' }}!</h1>
                    <p class="text-white text-xs">Ви виконали всі завдання на цей тиждень.</p>

                    <ul class="mt-4">
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Завершити дизайн дашборду</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2 mb-2"></i> Виправити помилку #74</li>
                        <li class="text-sm font-light"><i class="fad fa-check-double mr-2"></i> Опублікувати версію 1.0.6</li>
                    </ul>
                </div>
                <!-- end info -->

            </div>
        </div>
        <!-- end update section -->

        <!-- carts -->
        <div class="flex flex-col">

            <!-- alert -->
            <div class="alert alert-dark mb-6">
                Привіт! Зачекайте хвилинку . . . . . . Підписуйтесь на наш Twitter
                <a class="ml-2" target="_blank" href="#">@ldk_cleopatra</a>
            </div>
            <!-- end alert -->

            <!-- charts -->
            <div class="grid grid-cols-2 gap-6 h-full">

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">
                        <h1 class="h6">
                            <span class="num-4">12</span>k
                            <p>перегляди сторінок</p>
                        </h1>

                        <div class="bg-teal-200 text-teal-700 border-teal-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-eye"></i>
                        </div>
                    </div>
                    <div class="analytics_1"></div>
                </div>

                <div class="card">
                    <div class="py-3 px-4 flex flex-row justify-between">
                        <h1 class="h6">
                            <span class="num-2">5</span>k
                            <p>Унікальні користувачі</p>
                        </h1>

                        <div class="bg-indigo-200 text-indigo-700 border-indigo-300 border w-10 h-10 rounded-full flex justify-center items-center">
                            <i class="fad fa-users-crown"></i>
                        </div>
                    </div>
                    <div class="analytics_1"></div>
                </div>

            </div>
            <!-- charts    -->

        </div>
        <!-- end charts -->

    </div>
    <!-- end Analytics -->

    <!-- Sales Overview -->
    <div class="card mt-6">
        <div class="card-header flex flex-row justify-between">
            <h1 class="h6">Огляд продажів</h1>
            <div class="flex flex-row justify-center items-center">
                <a href=""><i class="fad fa-chevron-double-down mr-6"></i></a>
                <a href=""><i class="fad fa-ellipsis-v"></i></a>
            </div>
        </div>
        <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">
            <div class="p-8">
                <h1 class="h2">5,337</h1>
                <p class="text-black font-medium">Продажів за цей місяць</p>
                <div class="mt-20 mb-2 flex items-center">
                    <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                        <i class="fa fa-caret-up"></i>
                    </div>
                    <p class="text-black"><span class="text-green-400">12% більше продажів</span> у порівнянні з минулим місяцем.</p>
                </div>
                <div class="flex items-center">
                    <div class="py-1 px-3 rounded bg-red-200 text-red-900 mr-3">
                        <i class="fa fa-caret-down"></i>
                    </div>
                    <p class="text-black"><span class="text-red-400">5% менше доходу</span> у порівнянні з минулим місяцем.</p>
                </div>
                <a href="#" class="btn-shadow mt-6 inline-block">переглянути деталі</a>
            </div>
            <div>
                <div id="sealsOverview"></div>
            </div>
        </div>
    </div>
    <!-- end Sales Overview -->
@endsection

@push('scripts')
<script>
    var chartOptions = function(color){
      return {
        chart: { height: 51, width: '100%', type: 'area', sparkline: { enabled: true }, toolbar: { show: false } },
        grid: { show: false, padding: { top: 0, right: 0, bottom: 0, left: 0 } },
        dataLabels: { enabled: false },
        legend: { show: false },
        series: [{ name: "serie1", data: [20, 40, 30, 50, 40, 60, 50] }],
        fill: { colors: [color] },
        stroke: { colors: [color], width: 3 },
        yaxis: { show: false },
        xaxis: { show: false }
      };
    }

    var els = document.getElementsByClassName("analytics_1");
    if(els.length > 0) {
        new ApexCharts(els[0], chartOptions('#4fd1c5')).render();
        new ApexCharts(els[1], chartOptions('#4c51bf')).render();
    }

    var sealsOptions = {
        chart: { height: 350, type: 'bar', toolbar: {show: false} },
        series: [{ name: 'Sales', data: [30, 40, 45, 50, 49, 60, 70, 91] }],
        xaxis: { categories: [2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022] },
        colors: ['#30aba0']
    };
    new ApexCharts(document.querySelector("#sealsOverview"), sealsOptions).render();
</script>
@endpush
