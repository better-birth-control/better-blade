<{{ $url ? 'a' : 'button' }} {{ $attributes->merge(['class' => 'better-link']) }} {!! $url ? 'href="' . $url . '"' : '' !!} {!! $isExternal() ? 'target="_blank" rel="noopener"' : ''  !!} {!! $ariaControls ? 'aria-controls="' . $ariaControls . '"' : '' !!}>
    {{ $slot }}
    @if($isExternal())
        <span class="better-visually-hidden">
            Hidden
        </span>
    @endif
</{{ $url ? 'a' : 'button' }}>
