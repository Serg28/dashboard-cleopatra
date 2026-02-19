# LDK Cleopatra - Тема для панелі керування Laravel

Цей пакет надає сучасну та адаптивну тему для панелі керування на основі [Cleopatra](https://github.com/moesaid/cleopatra), оптимізовану для Laravel 10+, 11, 12 та Livewire 3/4.

## Особливості

-   Підтримка **Laravel 10, 11 та 12**.
-   Інтеграція з **Livewire 3 та 4**.
-   Використання **Livewire Islands** для незалежного оновлення частин сторінки.
-   Підтримка **wire:navigate** для швидкої навігації без перезавантаження сторінки.
-   Адаптивний дизайн на основі Tailwind CSS.

## Встановлення

Встановіть пакет через composer:

```bash
composer require laravel-dashboard-kit/dashboard-cleopatra
```

Опублікуйте конфігурацію та асети:

```bash
php artisan vendor:publish --tag=dashboard-cleopatra-config
php artisan vendor:publish --tag=dashboard-cleopatra-assets
```

## Налаштування

Ви можете налаштувати заголовок та логотип у файлі `config/dashboard-cleopatra.php`.

## Використання

Використовуйте макет `dashboard-cleopatra::layouts.full` для ваших сторінок:

```blade
@extends('dashboard-cleopatra::layouts.full')

@section('content')
    <div>
        Ваш контент тут
    </div>
@endsection
```

### Використання Islands

Тема підтримує Livewire Islands. Основні частини, такі як шапка (`main-header`) та бічна панель (`main-sidebar`), обгорнуті в `@island`, що дозволяє оновлювати їх незалежно.

## Інструкція для розробника та ІІ

### Структура проекту

-   `src/Providers/DashboardCleopatraServiceProvider.php`: Основний сервіс-провайдер, що реєструє в'юхи, конфігурацію та асети.
-   `resources/views/layouts/`: Макети сторінок (full, horizontal, blank).
-   `resources/views/areas/`: Частини макетів (шапка, бічна панель, контент).
-   `config/dashboard-cleopatra.php`: Головний файл налаштувань.

### Як швидко почати кастомізацію

1.  **Зміна логотипу**: Оновіть шлях у `config/dashboard-cleopatra.php` або замініть файли в `public/vendor/dashboard-cleopatra/img/`.
2.  **Зміна навігації**: Тема використовує `config('dashboard-ui.nav')`. Переконайтеся, що у вас встановлено `laravel-dashboard-kit/dashboard-ui` та налаштовано навігаційне меню.
3.  **Додавання скриптів/стилів**: Використовуйте `@push('style')` та `@push('script')` у ваших Blade-шаблонах.

### Поради для ІІ

-   Цей пакет використовує `@livewireStyles` та `@livewireScripts` у головному файлі `app.blade.php`.
-   Для навігації використовується `wire:navigate`, що робить додаток схожим на SPA.
-   При додаванні нових інтерактивних елементів у шапку або бічну панель, пам'ятайте про використання `@island`, якщо хочете уникнути повного перерендерингу компонента Livewire.
