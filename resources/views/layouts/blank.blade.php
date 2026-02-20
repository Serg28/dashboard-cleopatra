@extends('dashboard-cleopatra::app')

@push('body')
    <body class="bg-gray-100">
        {!! $slot !!}
    </body>
@endpush
