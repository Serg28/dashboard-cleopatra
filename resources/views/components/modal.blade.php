@props([
    'id' => null,
    'title' => null,
    'maxWidth' => 'lg',
])

@php
    $maxWidthClass = [
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
    ][$maxWidth] ?? 'max-w-lg';
@endphp

<div x-data="{ open: false }"
     x-show="open"
     @open-modal.window="if ($event.detail.id === '{{ $id }}') open = true"
     @close-modal.window="if ($event.detail.id === '{{ $id }}') open = false"
     @keydown.escape.window="open = false"
     class="fixed inset-0 z-50 flex items-center justify-center p-4"
     style="display: none;">

    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="open = false"
         x-transition:enter="transition opacity-100 ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:leave="transition opacity-0 ease-in duration-200">
    </div>

    <!-- Content -->
    <div class="bg-card w-full {{ $maxWidthClass }} rounded-2xl border border-border shadow-2xl overflow-hidden relative z-10"
         x-transition:enter="transition transform opacity-100 scale-100 ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:leave="transition transform opacity-0 scale-95 ease-in duration-200">

        <div class="px-6 py-4 border-b border-border flex items-center justify-between bg-muted/20">
            <h4 class="font-bold text-lg text-foreground">{{ $title }}</h4>
            <button @click="open = false" class="w-8 h-8 flex items-center justify-center rounded-lg text-muted-foreground hover:text-foreground hover:bg-muted transition-colors">
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>

        <div class="p-6">
            {{ $slot }}
        </div>

        @isset($footer)
            <div class="px-6 py-4 border-t border-border bg-muted/10 flex justify-end gap-3">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
