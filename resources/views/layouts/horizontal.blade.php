@extends('dashboard-cleopatra::app')

@push('body')
    <body class="bg-gray-100">
        @island(name: 'main-header', always: true)
            @include('dashboard-cleopatra::areas.horizontal.main-header')
        @endisland

        <div class="h-screen flex flex-row flex-wrap">
            <div class="container mx-auto p-6">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset

                @yield('modals')
            </div>
        </div>

        @include('dashboard-cleopatra::partials.footer')
    </body>
@endpush
