@extends('dashboard-cleopatra::app')

@section('body')
    @push('body')
        @island(name: 'main-header', always: true)
            @include('dashboard-cleopatra::areas.full.main-header')
        @endisland

        <!-- Sidebar -->
        <aside id="sidebar"
            class="sidebar fixed top-16 left-0 w-[260px] h-[calc(100vh-4rem)] bg-sidebar text-sidebar-foreground border-r border-sidebar-border z-40 transition-all duration-300 overflow-y-auto"
            :class="{'lg:translate-x-0': sidebarOpen, 'lg:-translate-x-full': !sidebarOpen, 'translate-x-0': mobileMenuOpen, '-translate-x-full': !mobileMenuOpen}">

            <div class="p-4 space-y-8">
                @island(name: 'main-sidebar', always: true)
                    @include('dashboard-cleopatra::areas.full.main-sidebar')
                @endisland
            </div>
        </aside>

        <!-- Main Content -->
        <main id="content" class="transition-all duration-300 pt-16 min-h-screen"
            :class="{'lg:ml-[260px]': sidebarOpen, 'lg:ml-0': !sidebarOpen}">
            <div class="p-4 sm:p-6 lg:p-8">
                @yield('content')
                {{ $slot ?? '' }}
            </div>
        </main>

        <!-- Mobile Overlay -->
        <div x-show="mobileMenuOpen" @click="mobileMenuOpen = false"
            class="fixed inset-0 bg-black/50 z-30 lg:hidden"
            x-transition:enter="transition opacity-100 ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:leave="transition opacity-0 ease-in duration-200">
        </div>
    @endpush
@endsection
