@extends('dashboard-cleopatra::app')

@push('body')

    <body class="bg-gray-100">
        @island(name: 'main-header', always: true)
            @include('dashboard-cleopatra::areas.full.main-header')
        @endisland

        <div class="h-screen flex flex-row flex-wrap">
            @island(name: 'main-sidebar', always: true)
                @include('dashboard-cleopatra::areas.full.main-sidebar')
            @endisland

            @include('dashboard-cleopatra::areas.full.content')

            @yield('modals')
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endpush
