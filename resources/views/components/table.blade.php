<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table-auto w-full text-left']) }}>
        {{ $slot }}
    </table>
</div>
