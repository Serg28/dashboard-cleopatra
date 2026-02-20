@props(['title'])

<div x-show="activeTab == '{{ Str::slug($title) }}'">
    {!! $slot !!}
</div>
