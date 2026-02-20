@props(['items', 'label', 'selected' => []])

@php
$id = \Str::of($attributes->get('name', null) . \Str::random(10))->slug();
@endphp

{{-- @error($attributes->get('name')) has-danger @enderror" --}}
{{-- $attributes->get('inset') --}}
<div @class(['my-6 w-full'])
    dir="{{ dashboard_rtl('rtl', 'ltr') }}">

    @isset($label)
        @include('dashboard-cleopatra::components.form.label', [
            'id' => $id,
            'required' => $attributes->get('required', false),
            'slot' => $label,
        ])
    @endisset

    <select
        {{ $attributes->except('class')->merge([
            'type' => 'text',
            'id' => $id,
            'placeholder' => $slot,
        ]) }}
        @class([
            'block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
        ])>
        @isset($items)
            @foreach ($items as $value => $item)
                <option {{ (is_array($selected) ? in_array($value, $selected) : $selected == $value) ? 'selected' : '' }}
                    value="{{ $value }}">
                    {{ $item }}
                </option>
            @endforeach
        @else
            {!! $slot !!}
        @endisset
    </select>

    @error($attributes->get('name'))
        <div class="text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
