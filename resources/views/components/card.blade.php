<div {{ $attributes->merge(['class' => 'bg-white rounded border border-gray-300 shadow-sm']) }}>
    @isset($header)
        <div class="px-6 py-4 border-b border-gray-300 font-bold text-gray-700">
            {{ $header }}
        </div>
    @endisset

    <div class="p-6">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="px-6 py-4 border-t border-gray-300 bg-gray-50 rounded-b">
            {{ $footer }}
        </div>
    @endisset
</div>
