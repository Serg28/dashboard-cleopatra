<div class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
    <h1>
        {{ $slot }}
    </h1>

    @isset($subtitle)
        <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
            <strong>
                {{ $subtitle }}
            </strong>
        </div>
    @endisset
</div>

<hr>
