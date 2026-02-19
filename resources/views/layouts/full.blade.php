@extends('dashboard-cleopatra::app')

@push('body')

    <body class="bg-gray-100">
        @include('dashboard-cleopatra::areas.full.main-header')

        <div class="h-screen flex flex-row flex-wrap">
            @include('dashboard-cleopatra::areas.full.main-sidebar')

            @include('dashboard-cleopatra::areas.full.content')

            @yield('modals')
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endpush
