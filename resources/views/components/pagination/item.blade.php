<li @class([ "page-item"
    , "active"=> $attributes->get('active')
    ])>
    <a class="page-link"
        href="{{ $attributes->get('href') ?? '#' }}">
        {{ $slot }}
    </a>
</li>
