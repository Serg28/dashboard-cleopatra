@unless(isset($except) && in_array('show', $except))
    <x-dashboard-table-option href="{{ route($attributes->get('route') . '.show', optional($resource)->id ?? $resource) }}">
        <x-ri-eye-line /> <span>View</span>
    </x-dashboard-table-option>
@endunless

@unless(isset($except) && in_array('edit', $except))
    <x-dashboard-table-option href="{{ route($attributes->get('route') . '.edit', optional($resource)->id ?? $resource) }}">
        <x-ri-edit-2-line /> <span>Edit</span>
    </x-dashboard-table-option>
@endunless

@unless(isset($except) && in_array('delete', $except))
    <x-dashboard-table-option href="#"
        onclick="event.preventDefault();
                            document.getElementById('deleteResource{{ optional($resource)->id ?? $resource }}').submit();">

        <x-dashboard-form action="{{ route($attributes->get('route') . '.destroy', optional($resource)->id ?? $resource) }}"
            id="deleteResource{{ optional($resource)->id ?? $resource }}"
            method="delete" />
        <x-ri-delete-bin-5-line /> <span>Delete</span>
    </x-dashboard-table-option>
@endunless
