<x-dashboard-cleopatra-sidebar>
    @foreach (config('dashboard-cleopatra.nav', []) as $parent)
        @switch($parent['type'] ?? null)
            @case('label')
                <x-dashboard-cleopatra-sidebar-label>
                    {{ $parent['title'] }}
                </x-dashboard-cleopatra-sidebar-label>
            @break

            @default
                @if (isset($parent['items']) && is_array($parent['items']))
                    {{-- Дропдаун для бічної панелі --}}
                    <div class="mb-3" x-data="{ open: @js(collect($parent['items'])->contains('active', true)) }">
                        <button @click="open = !open" class="flex items-center justify-between w-full font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <div class="flex items-center gap-2">
                                @isset($parent['icon'])
                                    <i class="{{ $parent['icon'] }} w-4 text-center"></i>
                                @endisset
                                {{ __($parent['title']) }}
                            </div>
                            <i class="fad fa-chevron-down text-xs transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
                        </button>
                        <div x-show="open" class="pl-4 mt-2 flex flex-col gap-2" style="display: none;">
                            @foreach ($parent['items'] ?? [] as $child)
                                <a href="{{ $child['url'] }}"
                                    wire:navigate
                                    class="text-sm text-gray-700 hover:text-teal-600 {{ ($child['active'] ?? false) ? 'text-teal-700 font-semibold' : '' }}">
                                    {{ __($child['title']) }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <x-dashboard-cleopatra-sidebar-item
                        :href="$parent['url'] ?? '#'"
                        :active="$parent['active'] ?? false"
                        :icon="$parent['icon'] ?? null"
                    >
                        {{ __($parent['title']) }}
                    </x-dashboard-cleopatra-sidebar-item>
                @endif
        @endswitch
    @endforeach
</x-dashboard-cleopatra-sidebar>
