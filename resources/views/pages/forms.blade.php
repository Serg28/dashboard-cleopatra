@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-2 gap-6 lg:grid-cols-1">
    {{-- Основні елементи форм --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Основні елементи</x-slot>
        <form>
            <x-dashboard-cleopatra::input label="Ім'я" name="name" placeholder="Введіть ваше ім'я" required />
            <x-dashboard-cleopatra::input label="Email" name="email" type="email" placeholder="email@example.com" />
            <x-dashboard-cleopatra::select label="Країна" name="country">
                <option value="ua">Україна</option>
                <option value="us">США</option>
                <option value="uk">Великобританія</option>
            </x-dashboard-cleopatra::select>
            <x-dashboard-cleopatra::textarea label="Про себе" name="bio" placeholder="Розкажіть трохи про себе..." />
            <x-dashboard-cleopatra::checkbox label="Погоджуюсь з умовами" name="terms" />
            <div class="mt-4">
                <x-dashboard-cleopatra::button type="submit">Зберегти</x-dashboard-cleopatra::button>
            </div>
        </form>
    </x-dashboard-cleopatra::card>

    {{-- Горизонтальна форма --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Горизонтальна форма</x-slot>
        <form class="space-y-4">
            <div class="flex items-center lg:flex-col lg:items-start">
                <label class="w-1/3 text-sm font-bold text-gray-700 lg:w-full lg:mb-2">Логін</label>
                <div class="w-2/3 lg:w-full">
                    <x-dashboard-cleopatra::input name="username" class="mb-0" />
                </div>
            </div>
            <div class="flex items-center lg:flex-col lg:items-start">
                <label class="w-1/3 text-sm font-bold text-gray-700 lg:w-full lg:mb-2">Пароль</label>
                <div class="w-2/3 lg:w-full">
                    <x-dashboard-cleopatra::input name="password" type="password" class="mb-0" />
                </div>
            </div>
            <div class="flex justify-end">
                <x-dashboard-cleopatra::button>Увійти</x-dashboard-cleopatra::button>
            </div>
        </form>
    </x-dashboard-cleopatra::card>
</div>
@endsection
