<x-dashboard-cleopatra-header class="lg:fixed lg:w-full lg:top-0 lg:z-20">
    <x-slot name="left">
        @foreach (config('dashboard-cleopatra.nav', []) as $item)
            @if(!isset($item['type']) || $item['type'] !== 'label')
                <x-dashboard-cleopatra-header-item :href="$item['url'] ?? '#'" :title="$item['title']">
                    {{ __($item['title']) }}
                </x-dashboard-cleopatra-header-item>
            @endif
        @endforeach
    </x-slot>

    <x-slot name="right">
        <x-dashboard-cleopatra-dropdown>
            <x-slot name="custom">
                <div class="flex items-center">
                    <div class="w-8 h-8 overflow-hidden rounded-full mr-2">
                        <img class="w-full h-full object-cover"
                            src="{{ asset('vendor/dashboard-cleopatra/img/user.svg') }}">
                    </div>
                    <span class="text-sm font-semibold text-gray-800">{{ auth()->user()->name ?? 'Користувач' }}</span>
                </div>
            </x-slot>

            <div class="py-2">
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                    href="#" wire:navigate>Мій профіль</a>
                <hr>
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                    href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Вихід</a>
            </div>
        </x-dashboard-cleopatra-dropdown>
    </x-slot>
</x-dashboard-cleopatra-header>

@if(Route::has('logout'))
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endif
