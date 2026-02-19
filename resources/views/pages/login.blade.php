@extends('dashboard-cleopatra::layouts.blank')

@section('content')
<div class="h-screen flex items-center justify-center bg-gray-200">
    <div class="w-full max-w-md">
        <x-dashboard-cleopatra::card>
            <div class="text-center mb-6">
                <img src="{{ asset(config('dashboard-cleopatra.logo.default')) }}" class="w-16 mx-auto mb-4">
                <h1 class="text-2xl font-bold">{{ config('dashboard-cleopatra.title', 'Cleopatra') }}</h1>
                <p class="text-gray-500">Увійдіть у свій аккаунт</p>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <x-dashboard-cleopatra::input label="Email" name="email" type="email" required autofocus />
                <x-dashboard-cleopatra::input label="Пароль" name="password" type="password" required />

                <div class="flex items-center justify-between mb-6">
                    <x-dashboard-cleopatra::checkbox label="Запам'ятати мене" name="remember" />
                    <a href="#" class="text-sm text-indigo-600 hover:underline">Забули пароль?</a>
                </div>

                <x-dashboard-cleopatra::button class="w-full" size="lg">Увійти</x-dashboard-cleopatra::button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-500">
                Немає аккаунту? <a href="#" class="text-indigo-600 hover:underline">Зареєструватися</a>
            </div>
        </x-dashboard-cleopatra::card>
    </div>
</div>
@endsection
