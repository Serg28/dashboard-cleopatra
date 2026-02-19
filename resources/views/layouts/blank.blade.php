@extends('dashboard-cleopatra::app')

@push('body')
    <body class="bg-gray-100">
        {{ $slot ?? '' }}
        @yield('content')
    </body>
@endpush
