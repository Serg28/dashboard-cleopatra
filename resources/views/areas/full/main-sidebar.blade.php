<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

    <div class="flex flex-col">
        @foreach (config('dashboard-ui.nav') as $parent)
            @switch($parent['type'] ?? null)
                @case('label')
                    <p class="uppercase text-xs text-gray-600 mt-4 mb-4 tracking-wider">
                        {{ $parent['title'] }}
                    </p>
                @break

                @default
                    @if (isset($parent['items']) && is_array($parent['items']))
                        <x-dashboard-dropdown :title="__($parent['title'])"
                            :active="count(array_filter(Arr::pluck($parent['items'], 'active'))) > 0">
                            @foreach ($parent['items'] ?? [] as $child)
                                <x-dashboard-dropdown-item :href="$child['url']"
                                    :active="$child['active'] ?? false"
                                    :hideHr="$loop->last">
                                    {{ __($child['title']) }}
                                </x-dashboard-dropdown-item>
                            @endforeach
                        </x-dashboard-dropdown>
                    @else
                        <a href="{{ $parent['url'] }}"
                            @class([
                                'flex gap-2 items-center font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500',
                                'text-teal-700' => isset($parent['active']) && $parent['active'],
                                'mb-3' => !$loop->last,
                            ])>
                            @isset($parent['icon'])
                                @svg($parent['icon'], [
                                    'width' => 16,
                                    'height' => 16,
                                ])
                            @endisset
                            {{ __($parent['title']) }}
                        </a>
                    @endif
            @endswitch
        @endforeach
    </div>
    {{-- end sidebar content --}}

</div>
