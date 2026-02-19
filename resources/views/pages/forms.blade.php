@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="space-y-8">
    <div>
        <h1 class="text-2xl font-bold tracking-tight">Форми</h1>
        <p class="text-muted-foreground mt-1">Компоненти введення даних Cleopatra 2.0.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Basic Inputs -->
        <x-dashboard-cleopatra-card>
            <x-slot name="header">Базові поля вводу</x-slot>
            <div class="space-y-4">
                <div>
                    <x-dashboard-cleopatra-label for="name" label="Ім'я" required />
                    <x-dashboard-cleopatra-input id="name" placeholder="Введіть ваше ім'я" />
                </div>
                <div>
                    <x-dashboard-cleopatra-label for="email" label="Email" />
                    <x-dashboard-cleopatra-input id="email" type="email" placeholder="email@example.com" />
                </div>
                <div>
                    <x-dashboard-cleopatra-label for="password" label="Пароль" />
                    <x-dashboard-cleopatra-input id="password" type="password" value="secret" />
                </div>
            </div>
        </x-dashboard-cleopatra-card>

        <!-- Select & Textarea -->
        <x-dashboard-cleopatra-card>
            <x-slot name="header">Вибір та текст</x-slot>
            <div class="space-y-4">
                <div>
                    <x-dashboard-cleopatra-label for="country" label="Країна" />
                    <x-dashboard-cleopatra-select id="country" :options="['ua' => 'Україна', 'us' => 'США', 'gb' => 'Великобританія']" />
                </div>
                <div>
                    <x-dashboard-cleopatra-label for="message" label="Повідомлення" />
                    <x-dashboard-cleopatra-textarea id="message" rows="4" placeholder="Ваше повідомлення..."></x-dashboard-cleopatra-textarea>
                </div>
            </div>
        </x-dashboard-cleopatra-card>

        <!-- Checkboxes -->
        <x-dashboard-cleopatra-card>
            <x-slot name="header">Чекбокси</x-slot>
            <div class="space-y-6">
                <x-dashboard-cleopatra-checkbox label="Запам'ятати мене" />
                <x-dashboard-cleopatra-checkbox label="Маркетингові розсилки" description="Отримуйте новини про продукти та пропозиції." checked />
                <div class="flex flex-wrap gap-4">
                    <x-dashboard-cleopatra-checkbox color="success" checked label="Success" />
                    <x-dashboard-cleopatra-checkbox color="warning" checked label="Warning" />
                    <x-dashboard-cleopatra-checkbox color="destructive" checked label="Danger" />
                </div>
            </div>
        </x-dashboard-cleopatra-card>

        <!-- Input States -->
        <x-dashboard-cleopatra-card>
            <x-slot name="header">Стани полів</x-slot>
            <div class="space-y-4">
                <div>
                    <x-dashboard-cleopatra-label label="Поле з помилкою" />
                    <x-dashboard-cleopatra-input error="Це поле є обов'язковим" value="Неправильне значення" />
                </div>
                <div>
                    <x-dashboard-cleopatra-label label="Вимкнене поле" />
                    <x-dashboard-cleopatra-input disabled value="Ви не можете це редагувати" />
                </div>
            </div>
        </x-dashboard-cleopatra-card>
    </div>
</div>
@endsection
