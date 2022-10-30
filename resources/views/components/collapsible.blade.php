<div class="better-collapsible {{ $last ? 'last' : '' }}" :class="{open: open }" x-data="{open: {{ $open ? 'true' : 'false' }}}" {{ $attributes }}>
    <div id="{{ $headerId }}" class="header" role="button" :aria-expanded="open ? 'true' : 'false'" aria-controls="{{ $contentId }}" tabindex="0" @click="open = !open; $dispatch('betterToggle', {open})">
        <span class="flex-1">{{ $header }}</span>
        <x-better-icon name="nav-arrow-down" size="small"></x-better-icon>
    </div>

    <div id="{{ $contentId }}" aria-labelledby="{{ $headerId }}" class="content">
        {{ $slot }}
    </div>
</div>
