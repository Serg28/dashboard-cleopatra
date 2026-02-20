# LDK Cleopatra (Legacy) - Тема для панелі керування Laravel

Це успадкована версія пакету Cleopatra, яка зберігає залежність від `laravel-dashboard-kit/dashboard-ui`. Вона адаптована для роботи з Laravel 10+ та Livewire 3+ та повністю локалізована українською мовою.

## Особливості цієї версії

-   **Залежність від Dashboard UI**: Використовує спільні компоненти та логіку з пакету `dashboard-ui`.
-   **Локалізація**: Український інтерфейс та документація.
-   **Сумісність**: Працює на Laravel 10, 11, 12 та Livewire 3, 4.

## Встановлення

```bash
composer require laravel-dashboard-kit/dashboard-cleopatra
```

*Примітка: Переконайтеся, що `laravel-dashboard-kit/dashboard-ui` також сумісний з вашою версією Laravel.*

## Налаштування

Ця версія використовує конфігурацію `dashboard-ui` для побудови меню:

```php
// config/dashboard-ui.php
'nav' => [
    [
        'title' => 'Головна',
        'url' => '/dashboard',
        'icon' => 'fad fa-home',
    ],
    // ...
],
```

## Використання компонентів

Використовуйте стандартні компоненти `dashboard-ui`, які будуть стилізовані під тему Cleopatra.
