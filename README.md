# LDK Cleopatra - Тема для панелі керування Laravel

Цей пакет надає повну порт версію шаблону [Cleopatra](https://github.com/moesaid/cleopatra) для Laravel 10+, 11 та 12. Пакет повністю незалежний від зовнішніх UI-бібліотек і надає власний набір Blade-компонентів.

## Особливості

-   **Повна незалежність**: Пакет більше не вимагає `dashboard-ui`, що вирішує конфлікти версій Livewire.
-   **Підтримка Laravel 10, 11 та 12**.
-   **Livewire 3 та 4**: Повна сумісність, підтримка **Livewire Islands** та **wire:navigate**.
-   **Власна бібліотека компонентів**: Картки, кнопки, бейджі, форми, таблиці, модальні вікна та інше.
-   **Адаптивний дизайн**: Оптимізовано для всіх пристроїв.
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

**Модальне вікно (використовує Alpine.js):**
```blade
<x-dashboard-cleopatra::modal name="my-modal" title="Увага">
    Ви впевнені?
    <x-slot name="footer">
        <x-dashboard-cleopatra::button @click="show = false">Так</x-dashboard-cleopatra::button>
    </x-slot>
</x-dashboard-cleopatra::modal>

{{-- Відкриття --}}
<button @click="$dispatch('open-modal', { name: 'my-modal' })">Відкрити</button>
```

## Навігація

Налаштуйте меню у файлі `config/dashboard-cleopatra.php`. Ви можете визначати заголовки (labels), іконки та стани активності.

---

## Інструкція для розробника та ІІ

### Архітектура

-   **Компоненти**: Знаходяться в `resources/views/components/`. Кожен компонент спроектований так, щоб бути максимально незалежним.
-   **Лейаути**: `layouts/full.blade.php` - основний макет з бічною панеллю. Використовує `@island` для оптимізації оновлень Livewire.
-   **Асети**: Всі CSS та JS файли Cleopatra знаходяться в `public/assets`. При розробці використовуйте `npm run dev` для компіляції (за наявності Gulp).

### Кастомізація

1.  **Теми**: Для зміни кольорів використовуйте Tailwind класи або змініть конфігурацію в `tailwind.config.js`.
2.  **Нові сторінки**: Створюйте нові Blade-файли, розширюючи `dashboard-cleopatra::layouts.full`.
3.  **Іконки**: Пакет підтримує FontAwesome Pro (потрібен ключ у вашому проекті або використання безкоштовної версії).

### Поради для ІІ

-   При генерації коду для цього пакета завжди використовуйте префікс `x-dashboard-cleopatra::` для компонентів.
-   Для навігації між сторінками використовуйте `wire:navigate` в тегах `<a>`.
-   Для динамічних частин інтерфейсу, які не потребують повного оновлення сторінки, використовуйте `@island`.
