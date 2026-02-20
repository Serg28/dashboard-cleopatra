@extends('dashboard-cleopatra::app')

@push('body')

    <body class="bg-gray-100">
        @include('dashboard-cleopatra::areas.horizontal.main-header')

        <div class="h-screen flex flex-row flex-wrap">
            <x-dashboard-container>
                @include('dashboard-cleopatra::areas.horizontal.content')

                @yield('modals')
            </x-dashboard-container>
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endpush
