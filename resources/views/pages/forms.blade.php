@extends('dashboard-cleopatra::layouts.full')

@section('content')
<div class="grid grid-cols-2 gap-6 lg:grid-cols-1">
    <x-dashboard-cleopatra-card>
        <x-slot name="header">Базова форма</x-slot>
        <form>
            <x-dashboard-cleopatra-input label="Ім'я" name="name" placeholder="Введіть ваше ім'я" required />
            <x-dashboard-cleopatra-input label="Електронна пошта" name="email" type="email" placeholder="example@mail.com" />
            <x-dashboard-cleopatra-select label="Роль" name="role">
                <option value="admin">Адміністратор</option>
                <option value="editor">Редактор</option>
                <option value="user">Користувач</option>
            </x-dashboard-cleopatra-select>
            <x-dashboard-cleopatra-textarea label="Опис" name="description" placeholder="Краткий опис..." />
            <x-dashboard-cleopatra-checkbox label="Приймати умови" name="terms" />
            <div class="mt-4">
                <x-dashboard-cleopatra-button type="submit">Відправити</x-dashboard-cleopatra-button>
            </div>
        </form>
    </x-dashboard-cleopatra-card>

    <x-dashboard-cleopatra-card>
        <x-slot name="header">Горизонтальна форма</x-slot>
        <form class="space-y-4">
            <div class="flex items-center">
                <x-dashboard-cleopatra-label class="w-1/3 mb-0">Логін</x-dashboard-cleopatra-label>
                <div class="w-2/3">
                    <x-dashboard-cleopatra-input name="login" class="mb-0" />
                </div>
            </div>
            <div class="flex items-center">
                <x-dashboard-cleopatra-label class="w-1/3 mb-0">Пароль</x-dashboard-cleopatra-label>
                <div class="w-2/3">
                    <x-dashboard-cleopatra-input name="password" type="password" class="mb-0" />
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <x-dashboard-cleopatra-button color="teal">Увійти</x-dashboard-cleopatra-button>
            </div>
        </form>
    </x-dashboard-cleopatra-card>
</div>
@endsection
