# LDK Cleopatra - Тема для панелі керування Laravel

Цей пакет надає повну порт версію шаблону [Cleopatra](https://github.com/moesaid/cleopatra) для Laravel 10+, 11 та 12. Пакет повністю незалежний від зовнішніх UI-бібліотек і надає власний набір Blade-компонентів.

## Особливості

-   **Повна незалежність**: Пакет більше не вимагає `dashboard-ui`, що вирішує конфлікти версій Livewire.
-   **Підтримка Laravel 10, 11 та 12**.
-   **Livewire 3 та 4**: Повна сумісність, підтримка **Livewire Islands** та **wire:navigate**.
-   **Власна бібліотека компонентів**: Картки, кнопки, бейджі, форми, таблиці, модальні вікна та інше.
-   **Адаптивний дизайн**: Оптимізовано для всіх пристроїв.
-   **Демо-сторінки**: Включено готові приклади дашбордів, таблиць та форм.
-   **Українська локалізація**: Всі коментарі та документація українською мовою.

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

## Швидкий старт (Демо)

Щоб побачити пакет у дії, увімкніть демо-режим у `config/dashboard-cleopatra.php`:

```php
'demo' => true,
```

Після цього вам будуть доступні наступні маршрути:
-   `/cleopatra-demo/analytics` — Головний дашборд аналітики.
-   `/cleopatra-demo/tables` — Приклад сторінки з таблицями.
-   `/cleopatra-demo/forms` — Приклад сторінки з формами.
-   `/cleopatra-demo/ecommerce` — Дашборд електронної комерції.
-   `/cleopatra-demo/crypto` — Крипто-дашборд.

## Використання компонентів

Пакет надає набір префіксованих компонентів `x-dashboard-cleopatra::`.

### Приклади:

**Кнопка:**
```blade
<x-dashboard-cleopatra::button color="indigo" size="md">
    Натисни мене
</x-dashboard-cleopatra::button>
```

**Картка:**
```blade
<x-dashboard-cleopatra::card>
    <x-slot name="header">Заголовок картки</x-slot>
    Вміст вашої картки
</x-dashboard-cleopatra::card>
```

**Статистична картка:**
```blade
<x-dashboard-cleopatra::stats-card
    title="Продажі"
    value="$12,000"
    trend="+5%"
    icon="fad fa-shopping-cart"
/>
```

---

## Інструкція для розробника та ІІ

### Архітектура

-   **Компоненти**: Знаходяться в `resources/views/components/`. Кожен компонент спроектований так, щоб бути максимально незалежним.
-   **Лейаути**: `layouts/full.blade.php` - основний макет з бічною панеллю.
-   **Контролери та Маршрути**: Демо-логіка знаходиться в `src/Http/Controllers` та `routes/web.php`.

### Кастомізація

1.  **Теми**: Для зміни кольорів використовуйте Tailwind класи або змініть конфігурацію в `tailwind.config.js`.
2.  **Нові сторінки**: Створюйте нові Blade-файли, розширюючи `dashboard-cleopatra::layouts.full`.

### Поради для ІІ

-   При генерації коду для цього пакета завжди використовуйте префікс `x-dashboard-cleopatra::` для компонентів.
-   Для навігації між сторінками використовуйте `wire:navigate`.
-   Цей пакет НЕ залежить від `dashboard-ui`. Всі компоненти вбудовані.
