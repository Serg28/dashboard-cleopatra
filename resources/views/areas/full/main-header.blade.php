<header class="fixed top-0 left-0 right-0 h-16 bg-card border-b border-border z-50 flex items-center">
    <!-- Logo Section -->
    <div class="w-[260px] h-full flex items-center px-5 border-r border-border flex-shrink-0 hidden lg:flex">
        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-2" wire:navigate>
            <img src="{{ asset(config('dashboard-cleopatra.logo.default')) }}" alt="Logo"
                class="w-8 h-8 object-contain dark:invert dark:brightness-200">
            <span class="font-semibold text-foreground text-lg">{{ config('dashboard-cleopatra.title') }}</span>
        </a>
    </div>

    <!-- Mobile Header -->
    <div class="flex items-center px-4 lg:hidden">
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="w-10 h-10 flex items-center justify-center text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors mr-2">
            <i class="ri-menu-line text-xl"></i>
        </button>
        <a href="{{ route('dashboard.index') }}" class="flex items-center gap-2" wire:navigate>
            <img src="{{ asset(config('dashboard-cleopatra.logo.default')) }}" alt="Logo"
                class="w-8 h-8 object-contain dark:invert dark:brightness-200">
            <span class="font-semibold text-foreground text-lg">{{ config('dashboard-cleopatra.title') }}</span>
        </a>
    </div>

    <!-- Main Nav Area -->
    <div class="flex-1 h-full flex items-center px-4 lg:px-5">
        <button @click="sidebarOpen = !sidebarOpen"
            class="w-9 h-9 items-center justify-center text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors hidden lg:flex mr-4">
            <i class="ri-indent-decrease text-lg" x-show="sidebarOpen"></i>
            <i class="ri-indent-increase text-lg" x-show="!sidebarOpen"></i>
        </button>

        <div class="hidden md:flex items-center gap-6 ml-2">
            <a href="#" class="text-sm font-medium text-muted-foreground hover:text-foreground transition-colors">Головна</a>
            <a href="#" class="text-sm font-medium text-muted-foreground hover:text-foreground transition-colors">Компоненти</a>
        </div>

        <div class="flex items-center gap-2 ml-auto">
            <button class="w-9 h-9 flex items-center justify-center text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors">
                <i class="ri-search-line text-lg"></i>
            </button>
            <button class="w-9 h-9 flex items-center justify-center text-muted-foreground hover:text-foreground hover:bg-muted rounded-lg transition-colors relative">
                <i class="ri-notification-3-line text-lg"></i>
                <span class="absolute top-2 right-2.5 w-2 h-2 bg-destructive rounded-full border-2 border-card"></span>
            </button>

            <div class="w-px h-6 bg-border mx-2"></div>

            <div class="flex items-center gap-3 pl-1 relative" x-data="{ userMenuOpen: false }">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-semibold text-foreground leading-none">{{ auth()->user()->name ?? 'Користувач' }}</p>
                    <p class="text-[11px] text-muted-foreground mt-1">Admin Pro</p>
                </div>
                <button @click="userMenuOpen = !userMenuOpen" class="w-9 h-9 rounded-full overflow-hidden border border-border">
                    <img src="{{ asset('vendor/dashboard-cleopatra/img/user.jpg') }}" class="w-full h-full object-cover">
                </button>

                <div x-show="userMenuOpen" @click.away="userMenuOpen = false"
                    class="absolute top-full right-0 mt-2 w-48 bg-card border border-border rounded-xl shadow-lg z-50 py-1"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    style="display: none;">
                    <a href="#" class="block px-4 py-2 text-sm text-foreground hover:bg-muted transition-colors">Мій профіль</a>
                    <a href="#" class="block px-4 py-2 text-sm text-foreground hover:bg-muted transition-colors">Налаштування</a>
                    <div class="h-px bg-border my-1"></div>
                    <a href="#" class="block px-4 py-2 text-sm text-destructive hover:bg-destructive/5 transition-colors"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Вихід
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

@if(Route::has('logout'))
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endif
