<div class="lg:fixed lg:w-full lg:top-0 lg:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    {{-- логотип --}}
    <div class="flex-none w-56 flex flex-row items-center">
        <a href="{{ config('dashboard-cleopatra.url.home', '/') }}" wire:navigate>
            <img class="flex-none w-10"
                src="{{ asset(config('dashboard-cleopatra.logo.default')) }}">
            <strong class="ml-2 capitalize">{{ config('dashboard-cleopatra.title', 'Cleopatra') }}</strong>
        </a>
    </div>
    {{-- кінець логотипу --}}

    {{-- перемикач контенту навігаційної панелі --}}
    <button id="navbarToggle"
        class="hidden lg:block lg:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>

    {{-- контент навігаційної панелі --}}
    <div id="navbar"
        class="animated lg:hidden lg:fixed lg:top-0 lg:w-full lg:left-0 lg:mt-16 lg:border-t lg:border-b lg:border-gray-200 lg:p-10 lg:pb-5 lg:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center lg:flex-col lg:items-center">

        <div class="flex flex-row justify-between items-center gap-4 lg:w-full lg:flex lg:flex-col lg:justify-evenly lg:pb-5 lg:mb-5 lg:border-b lg:border-gray-500 lg:gap-0 lg:items-end">
            @foreach (config('dashboard-cleopatra.nav', []) as $item)
                <a href="{{ $item['url'] ?? '#' }}"
                    wire:navigate
                    class="text-gray-600 hover:text-gray-900 font-semibold px-2">
                    {{ __($item['title']) }}
                </a>
            @endforeach
        </div>

        <div class="lg:flex lg:flex-row-reverse items-center">
            <x-dashboard-cleopatra::dropdown>
                <x-slot name="custom">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover"
                            src="{{ asset('vendor/dashboard-cleopatra/img/user.svg') }}">
                    </div>
                    <span class="ml-2 text-sm font-semibold text-gray-800">{{ auth()->user()->name ?? 'Користувач' }}</span>
                </x-slot>

                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Мій профіль</a>
                    <hr>
                    <a href="#"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Вихід</a>
                </div>
            </x-dashboard-cleopatra::dropdown>
        </div>
    </div>
</div>

@if(Route::has('logout'))
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endif
