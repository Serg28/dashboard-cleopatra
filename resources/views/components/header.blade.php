<div
    class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

    {{-- логотип --}}
    <div class="flex-none w-56 flex flex-row items-center">
        <img src="{{ asset(config('dashboard-cleopatra.logo.default')) }}"
            class="w-10 flex-none">
        <strong class="capitalize ml-1 flex-1">{{ config('dashboard-cleopatra.title') }}</strong>

        <button @click="sidebarOpen = !sidebarOpen" id="sliderBtn"
            class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fad fa-list-ul"></i>
        </button>
    </div>
    {{-- кінець логотипу --}}

    {{-- перемикач контенту навігаційної панелі --}}
    <button id="navbarToggle"
        class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    {{-- кінець перемикача контенту навігаційної панелі --}}

    {{-- контент навігаційної панелі --}}
    <div id="navbar"
        class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">

        {{-- Ліва частина --}}
        <div class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
            {{ $left ?? '' }}
        </div>

        {{-- Права частина --}}
        <div class="flex flex-row-reverse items-center">
            {{ $right ?? '' }}
        </div>
    </div>
</div>

@if(Route::has('logout'))
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endif
