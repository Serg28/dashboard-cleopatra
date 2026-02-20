@props(['tabs' => []])

@php
$tabs = array_combine(
    array_map(function ($tab) {
        return Str::slug($tab);
    }, $tabs),
    $tabs,
);
@endphp

<x-dashboard::card x-cloak
    x-data="{
    activeTab: (new URL(window.location.href)).searchParams.get('activeTab') ?? '{{ array_key_first($tabs) }}'
}"
    x-init="$watch('activeTab', (value) => {
    const url = new URL(window.location.href);
    url.searchParams.set('activeTab', value);
    history.pushState(null, document.title, url.toString());
})">
    <x-slot name="header">
        <x-dashboard::flex x="start"
            class="gap-2">
            @foreach ($tabs as $id => $tab)
                <x-dashboard::button color="secondary"
                    x-bind:class="{
                        'btn-secondary': activeTab != '{{ $id }}',
                        'btn-primary': activeTab == '{{ $id }}'
                    }"
                    @click="activeTab = '{{ $id }}'">
                    {{ $tab }}
                </x-dashboard::button>
            @endforeach
        </x-dashboard::flex>
    </x-slot>

    {!! $slot !!}
</x-dashboard::card>
