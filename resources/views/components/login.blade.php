@props(['title' => 'Login'])

<div class="h-screen flex items-center justify-center bg-gray-200">
    <div class="w-full max-w-md">
        <x-dashboard-cleopatra::card>
            <div class="text-center mb-6">
                <img src="{{ asset(config('dashboard-cleopatra.logo.default')) }}" class="w-16 mx-auto mb-4">
                <h1 class="text-2xl font-bold">{{ config('dashboard-cleopatra.title', 'Cleopatra') }}</h1>
                <p class="text-gray-500">{{ $title }}</p>
            </div>

            {{ $slot }}
        </x-dashboard-cleopatra::card>
    </div>
</div>
