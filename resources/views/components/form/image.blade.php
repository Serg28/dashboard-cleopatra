<div dir="{{ dashboard_rtl('rtl', 'ltr') }}"
    @class(['px-4 my-6 ' . $attributes['class']])>
    @unless($hideLabel)
        @include('dashboard-cleopatra::components.form.label')
    @endunless

    <div>
        <x-dashboard::button class="absolute rounded-full w-10 h-10 p-0"
            color="danger"
            id="{{ $id }}_delete_btn"
            style="display: none;"
            onclick="document.getElementById('{{ $id }}_delete').value = true;document.getElementById('{{ $id }}_preview').parentElement.style.display = 'none'">
            <x-ri-delete-bin-2-line />
        </x-dashboard-button>

        <img src="{{ $previewSrc }}"
            class="w-full"
            id="{{ $id }}_preview">
    </div>

    <input type="file"
        id="{{ $id }}"
        name="{{ $name }}"
        wire:loading.remove
        class="mt-1"
        {{ $attributes->except(['class', 'value'])->merge([
            'value' => is_string($attributes->get('name')) && strlen(old($attributes->get('name'))) > 0 ? old($attributes->get('name')) : $attributes->get('value'),
        ]) }} />

    <input id="{{ $id }}_delete"
        type="hidden"
        name="delete_{{ $name }}">

    @if ($attributes->get('name'))
        @error($attributes->get('name'))
            <div class="text-red-500">
                {{ $message }}
            </div>
        @enderror
    @endif
</div>

@push('scripts')
    <script>
        var input = document.getElementById('{{ $id }}');
        var placeholder = document.getElementById('{{ $id }}_preview');
        var deleteBtn = document.getElementById('{{ $id }}_delete_btn');

        input.onchange = function(event) {
            if (event.target.files.length > 0) {
                placeholder.src = URL.createObjectURL(event.target.files[0])
            }
        }

        placeholder.onload = function(event) {
            if (event.target.src) {
                deleteBtn.style.display = 'block'
            }
        }
    </script>
@endpush
