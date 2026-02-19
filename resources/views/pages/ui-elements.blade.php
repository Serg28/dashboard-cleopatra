@extends('dashboard-cleopatra::layouts.full')

@section('content')
<h1 class="h5">UI Elements</h1>
<p>Бібліотека компонентів Cleopatra, портована на Blade компоненти.</p>
<hr class="my-5">

<div class="grid grid-cols-1 gap-6">
    {{-- Кнопки --}}
    <div class="card">
        <div class="card-header">Кнопки</div>
        <div class="card-body flex flex-wrap gap-4">
            <x-dashboard-cleopatra-button>Default</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button shadow="true">Shadow</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button color="indigo">Indigo</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button color="info">Info</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button color="danger">Danger</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button color="gray">Gray</x-dashboard-cleopatra-button>
        </div>
    </div>

    {{-- Сповіщення --}}
    <div class="card">
        <div class="card-header">Сповіщення</div>
        <div class="card-body space-y-4">
            <x-dashboard-cleopatra-alert>Це стандартне сповіщення.</x-dashboard-cleopatra-alert>
            <x-dashboard-cleopatra-alert color="success">Успішно виконано!</x-dashboard-cleopatra-alert>
            <x-dashboard-cleopatra-alert color="error" dismissible="true">Помилка завантаження. Спробуйте ще раз.</x-dashboard-cleopatra-alert>
            <x-dashboard-cleopatra-alert color="dark">Темне сповіщення для важливих подій.</x-dashboard-cleopatra-alert>
        </div>
    </div>

    {{-- Бейджі --}}
    <div class="card">
        <div class="card-header">Бейджі</div>
        <div class="card-body flex flex-wrap gap-4">
            <x-dashboard-cleopatra-badge color="primary">Primary</x-dashboard-cleopatra-badge>
            <x-dashboard-cleopatra-badge color="success">Success</x-dashboard-cleopatra-badge>
            <x-dashboard-cleopatra-badge color="danger">Danger</x-dashboard-cleopatra-badge>
            <x-dashboard-cleopatra-badge color="warning">Warning</x-dashboard-cleopatra-badge>
        </div>
    </div>
</div>
@endsection
