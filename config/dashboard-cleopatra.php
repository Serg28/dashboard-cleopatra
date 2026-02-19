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
    | Демо-режим
    |--------------------------------------------------------------------------
    |
    | Якщо true, будуть доступні демо-маршрути за префіксом /cleopatra-demo
    |
    */
    'demo' => true,

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
            'url' => '/cleopatra-demo/analytics',
            'icon' => 'fad fa-chart-line',
        ],
        [
            'title' => 'E-commerce',
            'url' => '/cleopatra-demo/ecommerce',
            'icon' => 'fad fa-shopping-cart',
        ],
        [
            'title' => 'Криптовалюта',
            'url' => '/cleopatra-demo/crypto',
            'icon' => 'fab fa-bitcoin',
        ],
        [
            'title' => 'UI Елементи',
            'type' => 'label',
        ],
        [
            'title' => 'Загальні',
            'url' => '/cleopatra-demo/ui-elements',
            'icon' => 'fad fa-layer-group',
        ],
        [
            'title' => 'Таблиці',
            'url' => '/cleopatra-demo/tables',
            'icon' => 'fad fa-table',
        ],
        [
            'title' => 'Форми',
            'url' => '/cleopatra-demo/forms',
            'icon' => 'fad fa-edit',
        ],
        [
            'title' => 'Користувач',
            'type' => 'label',
        ],
        [
            'title' => 'Профіль',
            'url' => '/cleopatra-demo/profile',
            'icon' => 'fad fa-user',
        ],
        [
            'title' => 'Вихід',
            'url' => '/cleopatra-demo/login',
            'icon' => 'fad fa-sign-out',
        ],
    ],
];
