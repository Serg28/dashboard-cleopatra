@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="space-y-8">
    <div>
        <h1 class="text-2xl font-bold tracking-tight">UI Елементи</h1>
        <p class="text-muted-foreground mt-1">Бібліотека компонентів Cleopatra 2.0, портована на Blade.</p>
    </div>

    <!-- Buttons -->
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Кнопки</x-slot>
        <div class="flex flex-wrap gap-4">
            <x-dashboard-cleopatra-button variant="default">Default</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button variant="secondary">Secondary</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button variant="destructive">Destructive</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button variant="outline">Outline</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button variant="ghost">Ghost</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button variant="link">Link</x-dashboard-cleopatra-button>
        </div>
        <div class="mt-8 flex flex-wrap gap-4">
            <x-dashboard-cleopatra-button size="sm">Small</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button>Default</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button size="lg">Large</x-dashboard-cleopatra-button>
            <x-dashboard-cleopatra-button size="xl">Extra Large</x-dashboard-cleopatra-button>
        </div>
    </x-dashboard-cleopatra-card>

    <!-- Alerts -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <x-dashboard-cleopatra-card>
            <x-slot name="header">Сповіщення</x-slot>
            <div class="space-y-4">
                <x-dashboard-cleopatra-alert variant="info" title="Інформація">
                    Це стандартне інформаційне сповіщення.
                </x-dashboard-cleopatra-alert>
                <x-dashboard-cleopatra-alert variant="success" title="Успіх" dismissible>
                    Операцію виконано успішно!
                </x-dashboard-cleopatra-alert>
                <x-dashboard-cleopatra-alert variant="warning" title="Увага">
                    Зверніть увагу на цей важливий момент.
                </x-dashboard-cleopatra-alert>
                <x-dashboard-cleopatra-alert variant="destructive" title="Помилка">
                    Виникла критична помилка під час обробки.
                </x-dashboard-cleopatra-alert>
            </div>
        </x-dashboard-cleopatra-card>

        <x-dashboard-cleopatra-card>
            <x-slot name="header">Бейджі</x-slot>
            <div class="flex flex-wrap gap-3">
                <x-dashboard-cleopatra-badge variant="default">Primary</x-dashboard-cleopatra-badge>
                <x-dashboard-cleopatra-badge variant="secondary">Secondary</x-dashboard-cleopatra-badge>
                <x-dashboard-cleopatra-badge variant="success">Success</x-dashboard-cleopatra-badge>
                <x-dashboard-cleopatra-badge variant="warning">Warning</x-dashboard-cleopatra-badge>
                <x-dashboard-cleopatra-badge variant="destructive">Destructive</x-dashboard-cleopatra-badge>
                <x-dashboard-cleopatra-badge variant="outline">Outline</x-dashboard-cleopatra-badge>
            </div>
        </x-dashboard-cleopatra-card>
    </div>
</div>
@endsection
