@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-3 gap-6 lg:grid-cols-1">
    {{-- Профіль користувача --}}
    <x-dashboard-cleopatra::card class="col-span-1">
        <div class="text-center">
            <div class="w-32 h-32 rounded-full overflow-hidden mx-auto mb-4 border-4 border-indigo-500 p-1">
                <img src="{{ asset('vendor/dashboard-cleopatra/img/user.svg') }}" class="w-full h-full object-cover rounded-full">
            </div>
            <h2 class="text-xl font-bold">{{ auth()->user()->name ?? 'Користувач' }}</h2>
            <p class="text-gray-500 text-sm">Адміністратор</p>

            <div class="mt-6 flex justify-center gap-4">
                <div class="text-center">
                    <p class="font-bold text-lg">120</p>
                    <p class="text-xs text-gray-500 uppercase">Проекти</p>
                </div>
                <div class="text-center">
                    <p class="font-bold text-lg">1.5k</p>
                    <p class="text-xs text-gray-500 uppercase">Підписники</p>
                </div>
            </div>

            <div class="mt-8">
                <x-dashboard-cleopatra::button class="w-full">Написати</x-dashboard-cleopatra::button>
            </div>
        </div>
    </x-dashboard-cleopatra::card>

    {{-- Налаштування профілю --}}
    <x-dashboard-cleopatra::card class="col-span-2 lg:col-span-1">
        <x-slot name="header">Редагувати профіль</x-slot>
        <form>
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-1">
                <x-dashboard-cleopatra::input label="Ім'я" name="first_name" value="Користувач" />
                <x-dashboard-cleopatra::input label="Прізвище" name="last_name" value="Тестовий" />
                <x-dashboard-cleopatra::input label="Email" name="email" value="user@example.com" class="col-span-2 lg:col-span-1" />
                <x-dashboard-cleopatra::textarea label="Біографія" name="bio" rows="4" class="col-span-2 lg:col-span-1">Короткий опис користувача.</x-dashboard-cleopatra::textarea>
            </div>
            <div class="mt-4 flex justify-end">
                <x-dashboard-cleopatra::button>Оновити профіль</x-dashboard-cleopatra::button>
            </div>
        </form>
    </x-dashboard-cleopatra::card>
</div>
@endsection
