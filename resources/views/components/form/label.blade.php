@if (strlen($slot) > 0)
    <label for="{{ $id ?? '' }}"
        @class([
            'mb-1 block',
            // 'text-red-500' => $attributes->get('required', false), // for error case
        ])>
        {!! $slot !!}:

        @if ($attributes->get('required', $required ?? false))
            <span class="text-red-500">*</span>
        @endif
    </label>
@endif
