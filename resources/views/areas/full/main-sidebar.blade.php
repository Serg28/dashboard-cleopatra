<!-- start sidebar -->
<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

  <!-- sidebar content -->
  <div class="flex flex-col">

    <!-- sidebar toggle -->
    <div class="text-right hidden md:block mb-4">
      <button id="sideBarHideBtn">
        <i class="fad fa-times-circle"></i>
      </button>
    </div>
    <!-- end sidebar toggle -->

    @foreach (config('dashboard-cleopatra.nav', []) as $parent)
        @switch($parent['type'] ?? null)
            @case('label')
                <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">{{ $parent['title'] }}</p>
            @break

            @default
                @if (isset($parent['items']) && is_array($parent['items']))
                    {{-- Дропдаун для бічної панелі (якщо він підтримується в 1.x) --}}
                    {{-- Оригінальний шаблон 1.x не має складних дропдаунів в сайдбарі,
                         але ми додаємо підтримку --}}
                    <div class="mb-3" x-data="{ open: @js(collect($parent['items'])->contains('active', true)) }">
                        <button @click="open = !open" class="flex items-center justify-between w-full font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500 focus:outline-none">
                            <div class="flex items-center gap-2">
                                @isset($parent['icon'])
                                    <i class="{{ $parent['icon'] }} text-xs mr-2"></i>
                                @endisset
                                {{ __($parent['title']) }}
                            </div>
                            <i class="fad fa-chevron-down text-xs transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <div x-show="open" class="pl-4 mt-2 flex flex-col gap-2 animated fadeIn" style="display: none;">
                            @foreach ($parent['items'] ?? [] as $child)
                                <a href="{{ $child['url'] }}"
                                    wire:navigate
                                    class="text-sm text-gray-700 hover:text-teal-600 {{ ($child['active'] ?? false) ? 'text-teal-700 font-bold' : '' }}">
                                    {{ __($child['title']) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $parent['url'] ?? '#' }}"
                        wire:navigate
                        @class([
                            'mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500',
                            'text-teal-700 font-bold' => $parent['active'] ?? false,
                        ])>
                        @isset($parent['icon'])
                            <i class="{{ $parent['icon'] }} text-xs mr-2"></i>
                        @endisset
                        {{ __($parent['title']) }}
                    </a>
                @endif
        @endswitch
    @endforeach

  </div>
  <!-- end sidebar content -->

</div>
<!-- end sidbar -->
