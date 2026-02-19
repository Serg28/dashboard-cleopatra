<x-dashboard-cleopatra-header>
    <x-slot name="left">
        <x-dashboard-cleopatra-header-item icon="fad fa-envelope-open-text" title="email" />
        <x-dashboard-cleopatra-header-item icon="fad fa-comments-alt" title="chats" />
        <x-dashboard-cleopatra-header-item icon="fad fa-check-circle" title="tasks" />
        <x-dashboard-cleopatra-header-item icon="fad fa-calendar-exclamation" title="calendar" />
    </x-slot>

    <x-slot name="right">
        {{-- Користувач --}}
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
                    href="/cleopatra-demo/profile" wire:navigate>
                    <i class="fad fa-user-edit text-xs mr-1"></i>
                    редагувати профіль
                </a>
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                    href="#" wire:navigate>
                    <i class="fad fa-inbox-in text-xs mr-1"></i>
                    моя пошта
                </a>
                <hr>
                <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                    href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fad fa-user-times text-xs mr-1"></i>
                    Вихід
                </a>
            </div>
        </x-dashboard-cleopatra-dropdown>

        {{-- Сповіщення --}}
        <div class="mr-5">
            <x-dashboard-cleopatra-dropdown>
                <x-slot name="custom">
                    <i class="fad fa-bells text-gray-500"></i>
                </x-slot>
                <div class="w-64">
                    <div class="px-4 py-2 border-b font-bold text-sm">Сповіщення</div>
                    <div class="p-4 text-center text-gray-500 text-xs">Немає нових сповіщень</div>
                </div>
            </x-dashboard-cleopatra-dropdown>
        </div>
    </x-slot>
</x-dashboard-cleopatra-header>
