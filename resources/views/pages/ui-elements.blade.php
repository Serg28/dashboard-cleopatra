@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-1 gap-6">
    {{-- Кнопки --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Кнопки</x-slot>
        <div class="flex flex-wrap gap-4">
            <x-dashboard-cleopatra::button color="indigo">Indigo</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="teal">Teal</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="red">Red</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="green">Green</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="blue">Blue</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="yellow">Yellow</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="dark">Dark</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button color="light">Light</x-dashboard-cleopatra::button>
        </div>
        <div class="mt-6 flex flex-wrap gap-4 items-center">
            <x-dashboard-cleopatra::button size="sm">Small</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button size="md">Medium</x-dashboard-cleopatra::button>
            <x-dashboard-cleopatra::button size="lg">Large</x-dashboard-cleopatra::button>
        </div>
    </x-dashboard-cleopatra::card>

    {{-- Бейджі --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Бейджі</x-slot>
        <div class="flex flex-wrap gap-4">
            <x-dashboard-cleopatra::badge color="indigo">Indigo</x-dashboard-cleopatra::badge>
            <x-dashboard-cleopatra::badge color="teal">Teal</x-dashboard-cleopatra::badge>
            <x-dashboard-cleopatra::badge color="red">Red</x-dashboard-cleopatra::badge>
            <x-dashboard-cleopatra::badge color="green">Green</x-dashboard-cleopatra::badge>
            <x-dashboard-cleopatra::badge color="blue">Blue</x-dashboard-cleopatra::badge>
            <x-dashboard-cleopatra::badge color="yellow">Yellow</x-dashboard-cleopatra::badge>
        </div>
    </x-dashboard-cleopatra::card>

    {{-- Сповіщення --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Сповіщення</x-slot>
        <div class="space-y-4">
            <x-dashboard-cleopatra::alert color="indigo">Це інформаційне сповіщення кольору Indigo.</x-dashboard-cleopatra::alert>
            <x-dashboard-cleopatra::alert color="green">Операція виконана успішно!</x-dashboard-cleopatra::alert>
            <x-dashboard-cleopatra::alert color="red">Виникла помилка при завантаженні даних.</x-dashboard-cleopatra::alert>
            <x-dashboard-cleopatra::alert color="yellow">Попередження: термін дії підписки закінчується.</x-dashboard-cleopatra::alert>
        </div>
    </x-dashboard-cleopatra::card>

    {{-- Модальні вікна --}}
    <x-dashboard-cleopatra::card>
        <x-slot name="header">Модальні вікна</x-slot>
        <div class="flex gap-4">
            <x-dashboard-cleopatra::button @click="$dispatch('open-modal', { name: 'test-modal' })">
                Відкрити модальне вікно
            </x-dashboard-cleopatra::button>
        </div>
    </x-dashboard-cleopatra::card>
</div>

<x-dashboard-cleopatra::modal name="test-modal" title="Тестове модальне вікно">
    <p class="text-gray-600">Це вміст модального вікна. Тут можна розмістити будь-яку інформацію або форму.</p>
    <x-slot name="footer">
        <x-dashboard-cleopatra::button color="light" @click="show = false" class="mr-2">Скасувати</x-dashboard-cleopatra::button>
        <x-dashboard-cleopatra::button @click="show = false">Підтвердити</x-dashboard-cleopatra::button>
    </x-slot>
</x-dashboard-cleopatra::modal>
@endsection
