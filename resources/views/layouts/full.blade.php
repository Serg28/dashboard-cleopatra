@extends('dashboard-cleopatra::app')

@push('body')
    @island(name: 'main-header', always: true)
        @include('dashboard-cleopatra::areas.full.main-header')
    @endisland

    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

      @island(name: 'main-sidebar', always: true)
          @include('dashboard-cleopatra::areas.full.main-sidebar')
      @endisland

      <!-- strat content -->
      <div class="bg-gray-100 flex-1 p-6 md:mt-16">
          @yield('content')
          {{ $slot ?? '' }}
      </div>
      <!-- end content -->

    </div>
    <!-- end wrapper -->
@endpush
