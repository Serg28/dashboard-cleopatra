@php
$id = $attributes->get('name', null) . \Str::random(10);
@endphp

<div @class(['my-6 w-full'])
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">

    @unless($hideLabel)
        @include('dashboard-cleopatra::components.form.label')
    @endunless

    <textarea
        {{ $attributes->except('class')->merge([
            'type' => 'text',
            'id' => $id,
            'placeholder' => $slot,
        ]) }}
        @class([
            'block w-full rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
            'border-gray-300' => !$errors->has($attributes->get('name')),
            'border-red-500' => $errors->has($attributes->get('name')),
        ])>{!! $attributes->get('value') !!}</textarea>

    @error($attributes->get('name'))
        <div class="text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>

@if ($ckeditor)
    @push('scripts')
        <script>
            CKEDITOR.replace("{{ $id }}");
            CKEDITOR.config.height = "25em";
            CKEDITOR.config.forcePasteAsPlainText = false;
            CKEDITOR.config.pasteFromWordRemoveFontStyles = false;
            CKEDITOR.config.pasteFromWordRemoveStyles = false;
            CKEDITOR.config.allowedContent = true;
            CKEDITOR.config.extraAllowedContent = 'p(mso*,Normal)';
            CKEDITOR.config.pasteFilter = null;
            CKEDITOR.config.filebrowserUploadUrl = "{{ Route::has('tenant.dashboard.upload') ? route('tenant.dashboard.upload') : '' }}";
        </script>
    @endpush
@endif
