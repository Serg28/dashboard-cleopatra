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
            'icon' => 'ri-dashboard-line',
        ],
        [
            'title' => 'E-commerce',
            'url' => '/cleopatra-demo/ecommerce',
            'icon' => 'ri-shopping-bag-3-line',
        ],
        [
            'title' => 'Криптовалюта',
            'url' => '/cleopatra-demo/crypto',
            'icon' => 'ri-coin-line',
        ],
        [
            'title' => 'UI Елементи',
            'type' => 'label',
        ],
        [
            'title' => 'Компоненти',
            'url' => '/cleopatra-demo/ui-elements',
            'icon' => 'ri-stack-line',
        ],
        [
            'title' => 'Таблиці',
            'url' => '/cleopatra-demo/tables',
            'icon' => 'ri-table-line',
        ],
        [
            'title' => 'Форми',
            'url' => '/cleopatra-demo/forms',
            'icon' => 'ri-edit-box-line',
        ],
        [
            'title' => 'Користувач',
            'type' => 'label',
        ],
        [
            'title' => 'Профіль',
            'url' => '#',
            'icon' => 'ri-user-line',
        ],
        [
            'title' => 'Вихід',
            'url' => '#',
            'icon' => 'ri-logout-box-line',
        ],
    ],
];
