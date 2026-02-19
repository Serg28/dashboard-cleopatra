<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('dashboard-cleopatra.title', 'Cleopatra') }}</title>
    <link rel="icon" type="image/png" href="{{ asset(config('dashboard-cleopatra.logo.favicon', 'vendor/dashboard-cleopatra/img/fav.png')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" crossorigin href="{{ asset('vendor/dashboard-cleopatra/css/style.css') }}">

    <style>
        [x-cloak] { display: none !important; }
        * { font-family: 'Inter', sans-serif; }
    </style>

    @livewireStyles
    @stack('style')
</head>

<body class="bg-background text-foreground" x-data="{ sidebarOpen: true, mobileMenuOpen: false }">
    <div id="app" class="min-h-screen">
        @stack('body')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @livewireScripts
    @stack('script')
    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
