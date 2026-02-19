@extends('dashboard-cleopatra::app')

@push('body')
    <div x-data="{ sidebarOpen: false }">
        {{-- Шапка --}}
        @island(name: 'main-header', always: true)
            @include('dashboard-cleopatra::areas.full.main-header')
        @endisland

        <div class="h-screen flex flex-row flex-wrap">
            {{-- Бічна панель --}}
            @island(name: 'main-sidebar', always: true)
                @include('dashboard-cleopatra::areas.full.main-sidebar')
            @endisland

            {{-- Контент --}}
            <div class="bg-gray-100 flex-1 p-6 md:mt-16">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>

            @yield('modals')
        </div>

        {{-- Футер --}}
        @include('dashboard-cleopatra::partials.footer')
    </div>
@endpush
