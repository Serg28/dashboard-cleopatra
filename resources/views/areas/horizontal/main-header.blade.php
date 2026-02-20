<div class="lg:fixed lg:w-full lg:top-0 lg:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300"
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">

    {{-- logo --}}
    <div class="flex-none w-56 flex flex-row items-center">
        <a href="{{ config('dashboard-ui.url.home') }}">
            <img class="flex-none"
                src="{{ config('dashboard-ui.logo.default') }}"
                width="100"
                height="100">
        </a>
    </div>
    {{-- end logo --}}

    {{-- navbar content toggle --}}
    <button id="navbarToggle"
        class="hidden lg:block lg:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
    {{-- end navbar content toggle --}}

    {{-- navbar content --}}
    <div id="navbar"
        class="animated lg:hidden lg:fixed lg:top-0 lg:w-full lg:left-0 lg:mt-16 lg:border-t lg:border-b lg:border-gray-200 lg:p-10 lg:pb-5 lg:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center lg:flex-col lg:items-center">

        {{-- start navbar --}}
        <div
            class="flex flex-row justify-between items-center gap-4 lg:w-full lg:flex lg:flex-col lg:justify-evenly lg:pb-5 lg:mb-5 lg:border-b lg:border-gray-500 lg:gap-0 lg:items-end">
            @foreach (config('dashboard-ui.nav') as $parent)
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
                            'menu-btn p-0 m-0 focus:outline-none transition-all ease-in-out duration-300',
                            'text-gray-500 hover:text-gray-900 focus:text-gray-900' =>
                                !isset($parent['active']) || !$parent['active'],
                            'text-indigo-600 hover:text-indigo-900 focus:text-indigo-900' =>
                                isset($parent['active']) && $parent['active'],
                        ])>
                        <span>{{ __($parent['title']) }}</span>
                    </a>
                @endif

                @unless($loop->last)
                    <hr class="hidden lg:block w-full my-3 border-gray-300">
                @endunless
            @endforeach
        </div>
        {{-- end navbar --}}

        {{-- left --}}
        <div class="lg:flex lg:flex-row-reverse items-center">
            {{-- user --}}
            <x-dashboard-dropdown>
                <x-slot name="custom">
                    <div class="w-8 h-8 overflow-hidden rounded-full">
                        <img class="w-full h-full object-cover"
                            src="{{ optional(auth(config('dashboard-ui.guard', 'web'))->user())->avatar }}">
                    </div>

                    <div class="{{ dashboard_rtl('mr-2', 'ml-2') }} capitalize flex ">
                        <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">
                            {{ optional(auth(config('dashboard-ui.guard', 'web'))->user())->name }}
                        </h1>
                        <i class="fad fa-chevron-down {{ dashboard_rtl('mr-2', 'ml-2') }} text-xs leading-none"></i>
                    </div>
                </x-slot>

                @isset($navbarEnd)
                    {!! $navbarEnd !!}
                @endisset

                <x-dashboard-dropdown-item :hideHr="true"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </x-dashboard-dropdown-item>
            </x-dashboard-dropdown>
            {{-- end user --}}

            @isset($navbarExtra)
                <div
                    class="text-gray-600 lg:w-full lg:flex lg:flex-row lg:justify-evenly lg:pb-10 lg:mb-10 lg:border-b lg:border-gray-200 mt-2 lg:mt-0 {{ dashboard_rtl('lg:ml-10', 'lg:mr-10') }}">
                    {!! $navbarExtra !!}
                </div>
            @endisset
        </div>
        {{-- end right --}}
    </div>
    {{-- end navbar content --}}

</div>
{{-- end navbar --}}
