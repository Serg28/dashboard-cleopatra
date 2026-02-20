<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('vendor/dashboard-cleopatra/img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/dashboard-cleopatra/css/style.css') }}">

    <style>
        [x-cloak] { display: none !important; }
    </style>

    @stack('style')
    @livewireStyles
</head>

<body class="bg-gray-100">
    @stack('body')

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('vendor/dashboard-cleopatra/js/scripts.js') }}"></script>
    @livewireScripts
    @stack('script')
    @stack('scripts')
</body>

</html>
