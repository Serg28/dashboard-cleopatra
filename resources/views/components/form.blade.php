<form
    {{ $attributes->except(['method'])->merge([
        'action' => '#',
        'method' => 'POST',
        'enctype' => 'multipart/form-data',
        'novalidate',
    ]) }}
    onsubmit="return {{ $confirm ? "confirm('" . $confirm . "')" : true }}">
    {{ csrf_field() }}

    @method($attributes->get('method', 'post'))
    {!! $slot !!}
</form>
