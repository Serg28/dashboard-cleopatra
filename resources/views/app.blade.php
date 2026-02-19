<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('dashboard-cleopatra.title', 'Cleopatra') }}</title>

    <link rel="shortcut icon"
        href="{{ asset(config('dashboard-cleopatra.logo.favicon')) }}"
        type="image/x-icon">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
        href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    {{-- Main Style --}}
    <link rel="stylesheet"
        type="text/css"
        href="{{ asset('vendor/dashboard-cleopatra/css/style.css') }}">

    <style>
        [x-cloak] { display: none !important; }
    </style>

    @livewireStyles
    @stack('style')
    @stack('head')
</head>

<body class="bg-gray-100">
    @stack('body')

    @livewireScripts
    {{-- Livewire 3+ автоматично підключає Alpine.js --}}
    @stack('script')
    @stack('scripts')
</body>

</html>
