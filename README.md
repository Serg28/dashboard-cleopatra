# LDK Cleopatra - Тема для панелі керування Laravel

Цей пакет надає повну порт версію шаблону [Cleopatra](https://github.com/moesaid/cleopatra) для Laravel 10+, 11 та 12. Пакет повністю незалежний від зовнішніх UI-бібліотек і надає власний набір Blade-компонентів, що на 100% відповідають оригінальній верстці.

## Особливості

-   **100% відповідність оригіналу**: Всі компоненти та сторінки відтворюють оригінальну розмітку Cleopatra.
-   **Повна незалежність**: Пакет не вимагає `dashboard-ui` або інших зовнішніх UI-пакетів.
-   **Підтримка Laravel 10, 11 та 12**.
-   **Livewire 3 та 4**: Повна сумісність, підтримка **Livewire Islands** та **wire:navigate**.
-   **Власна бібліотека компонентів**: Картки, кнопки, бейджі, форми, таблиці, модальні вікна, сайдбар та хедер.
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

## Тестові сторінки (Демо)

Щоб переглянути готові сторінки, увімкніть демо-режим у `config/dashboard-cleopatra.php`:

```php
'demo' => true,
```

Маршрути для тестування:
-   `/cleopatra-demo/analytics` — Головний дашборд аналітики (копія оригіналу).
-   `/cleopatra-demo/ecommerce` — Дашборд електронної комерції.
-   `/cleopatra-demo/tables` — Сторінка з прикладами таблиць.
-   `/cleopatra-demo/forms` — Сторінка з прикладами форм.
-   `/cleopatra-demo/ui-elements` — Бібліотека UI елементів.

## Використання компонентів

Пакет надає набір компонентів з префіксом `x-dashboard-cleopatra-`.

### Приклади компонентів:

**Картка (Card):**
```blade
<x-dashboard-cleopatra-card>
    <x-slot name="header">Заголовок</x-slot>
    Вміст
</x-dashboard-cleopatra-card>
```

**Статистична картка (Stats Card):**
```blade
<x-dashboard-cleopatra-stats-card
    title="Продажі"
    value="$12,000"
    trend="+5%"
    icon="fad fa-shopping-cart"
    color="indigo"
/>
```

**Таблиця (Table):**
```blade
<x-dashboard-cleopatra-table>
    <x-dashboard-cleopatra-thead>
        <x-dashboard-cleopatra-th>Назва</x-dashboard-cleopatra-th>
    </x-dashboard-cleopatra-thead>
    <tbody>
        <x-dashboard-cleopatra-tr>
            <x-dashboard-cleopatra-td>Значення</x-dashboard-cleopatra-td>
        </x-dashboard-cleopatra-tr>
    </tbody>
</x-dashboard-cleopatra-table>
```

---

## Інструкція для розробника та ІІ

### Архітектура
Кожен компонент в `resources/views/components/` відповідає за певну частину оригінального шаблону. Макети в `resources/views/layouts/` використовують ці компоненти для створення цілісного інтерфейсу.

### Кастомізація
1.  **Навігація**: Редагуйте масив `nav` у `config/dashboard-cleopatra.php`. Підтримуються вкладені елементи (dropdown).
2.  **Стилі**: Пакет використовує скомпілений CSS Cleopatra. Ви можете додавати свої стилі через `@push('style')`.
3.  **Livewire**: Для Livewire 4 використовуйте `@island(name: 'name')` навколо частин, що часто оновлюються (наприклад, графіки).

### Поради для ІІ
-   Для створення нових сторінок використовуйте `@extends('dashboard-cleopatra::layouts.full')`.
-   Для інтерактивності використовуйте Alpine.js, який вже інтегрований.
-   Всі компоненти мають префікс `x-dashboard-cleopatra-` для уникнення конфліктів.
