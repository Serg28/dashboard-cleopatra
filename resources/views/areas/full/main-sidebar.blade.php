<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

    <div class="flex flex-col">
        @foreach (config('dashboard-cleopatra.nav', []) as $parent)
            @switch($parent['type'] ?? null)
                @case('label')
                    <p class="uppercase text-xs text-gray-600 mt-4 mb-4 tracking-wider">
                        {{ $parent['title'] }}
                    </p>
                @break

                @default
                    @if (isset($parent['items']) && is_array($parent['items']))
                        {{-- Використовуємо нативний HTML замість компонентів для незалежності --}}
                        <div class="mb-3">
                            <button class="flex items-center justify-between w-full font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                                <div class="flex items-center gap-2">
                                    @isset($parent['icon'])
                                        <i class="{{ $parent['icon'] }}"></i>
                                    @endisset
                                    {{ __($parent['title']) }}
                                </div>
                                <i class="fad fa-chevron-down text-xs"></i>
                            </button>
                            <div class="pl-4 mt-2 flex flex-col gap-2">
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
                        <a href="{{ $parent['url'] ?? '#' }}"
                            wire:navigate
                            @class([
                                'flex gap-2 items-center font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500',
                                'text-teal-700' => $parent['active'] ?? false,
                                'mb-3' => !$loop->last,
                            ])>
                            @isset($parent['icon'])
                                <i class="{{ $parent['icon'] }} w-4 text-center"></i>
                            @endisset
                            {{ __($parent['title']) }}
                        </a>
                    @endif
            @endswitch
        @endforeach
    </div>
    {{-- кінець контенту бічної панелі --}}

</div>
