@props(['label', 'icon', 'route', 'active' => false])

<li>
    <a href="{{ $route !== '#' ? route($route) : '#' }}"
       class="flex items-center gap-3 px-3 py-2 rounded-lg transition-all duration-200 group {{ $active ? 'bg-primary/10 text-primary' : 'text-muted-foreground hover:text-foreground hover:bg-muted' }}"
       wire:navigate>
        <i class="{{ $icon }} text-lg {{ $active ? 'text-primary' : 'text-muted-foreground group-hover:text-foreground' }}"></i>
        <span class="text-sm font-medium">{{ $label }}</span>
    </a>
</li>
