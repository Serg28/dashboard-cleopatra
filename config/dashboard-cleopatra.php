<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Заголовок панелі керування
    |--------------------------------------------------------------------------
    |
    | Цей заголовок відображається в шапці панелі керування.
    |
    */
    'title' => 'Cleopatra',

    /*
    |--------------------------------------------------------------------------
    | Логотип панелі керування
    |--------------------------------------------------------------------------
    |
    | Шлях до зображення логотипа.
    |
    */
    'logo' => [
        'default' => 'vendor/dashboard-cleopatra/img/logo.png',
        'small' => 'vendor/dashboard-cleopatra/img/logo.png',
        'favicon' => 'vendor/dashboard-cleopatra/img/logo.png',
    ],

    /*
    |--------------------------------------------------------------------------
    | Навігація
    |--------------------------------------------------------------------------
    |
    | Список елементів меню.
    |
    */
    'nav' => [
        [
            'title' => 'Дашборди',
            'type' => 'label',
        ],
        [
            'title' => 'Аналітика',
            'url' => '/admin/analytics',
            'icon' => 'fad fa-chart-line',
        ],
        [
            'title' => 'E-commerce',
            'url' => '/admin/ecommerce',
            'icon' => 'fad fa-shopping-cart',
        ],
        [
            'title' => 'Криптовалюта',
            'url' => '/admin/crypto',
            'icon' => 'fab fa-bitcoin',
        ],
        [
            'title' => 'UI Елементи',
            'type' => 'label',
        ],
        [
            'title' => 'Загальні',
            'url' => '/admin/ui-elements',
            'icon' => 'fad fa-layer-group',
        ],
        [
            'title' => 'Таблиці',
            'url' => '/admin/tables',
            'icon' => 'fad fa-table',
        ],
        [
            'title' => 'Форми',
            'url' => '/admin/forms',
            'icon' => 'fad fa-edit',
        ],
        [
            'title' => 'Користувач',
            'type' => 'label',
        ],
        [
            'title' => 'Профіль',
            'url' => '/admin/profile',
            'icon' => 'fad fa-user',
        ],
        [
            'title' => 'Вихід',
            'url' => '/logout',
            'icon' => 'fad fa-sign-out',
        ],
    ],
];
