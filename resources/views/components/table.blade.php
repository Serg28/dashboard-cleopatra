<div class="w-full overflow-x-auto border border-border rounded-xl">
    <table {{ $attributes->merge(['class' => 'w-full text-sm text-left']) }}>
        {{ $slot }}
    </table>
</div>
