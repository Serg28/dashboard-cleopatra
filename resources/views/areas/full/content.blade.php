<div class="bg-gray-100 flex-1 p-6 md:mt-16">
    {{-- <h1>{{ dashboard_ui()->title(__($attributes->get('title', 'Dashboard'))) }}</h1> --}}
    {!! $slot !!}

    @include('dashboard-abstract::include.notifications')
</div>
