@php
$id = $attributes->get('name', null) . \Str::random(10);
@endphp

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="offset-6 col-6">
                <div class="text-end">
                    <h3 class="my-1">
                        <span id="{{ $id }}_range_value">{{ $attributes->get('value', $attributes->get('min', 1)) }}</span>
                        <span>{{ $attributes->get('range-unit') }}</span>
                    </h3>
                    <label for="{{ $id }}"
                        class="text-muted mb-1 text-truncate">{!! $slot !!}</label>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h6 class="text-uppercase">{{ $attributes->get('min') }} <span class="float-end">{{ $attributes->get('max') }}</span></h6>
            <input
                {{ $attributes->merge([
                    'type' => 'range',
                    'class' => 'form-range',
                    'id' => $id,
                    'min' => 1,
                    'max' => 100,
                    'step' => 1,
                    'value' => $attributes->get('min', 1),
                ]) }}
                oninput="document.getElementById('{{ $id }}_range_value').textContent = this.value">
        </div>
    </div>
</div>
