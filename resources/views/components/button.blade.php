<{{ $url && !$noLink ? 'a' : 'button' }} class="better-button {{ $variant->value }}" {!! $url ? 'href="' . $url . '"' : '' !!} {!! $isExternal() ? 'target="_blank" rel="noopener"' : ''  !!} x-data {!! $loading ? ':aria-busy="' . $loading . '"' : '' !!}
@if($loading)
    :class="{ loading: {{ $loading }} }"
@endif
{{ $attributes }}>
    <div class="focus" aria-hidden="true"></div>
    <div class="content">
        {{ $slot }}
        @if($url)
            <span class="arrow" aria-hidden="true">→</span>
        @endif
    </div>
    @if($loading)
      <x-better-loading :theme="$variant === \BetterBirthControl\Better\View\Components\ButtonVariants::PRIMARY ? 'dark' : 'light'" x-show="{{ $loading }}" x-cloak></x-better-loading>
    @endif
    @if($isExternal())
        <div class="better-visually-hidden">
            Hidden
        </div>
    @endif
</{{ $url && !$noLink ? 'a' : 'button' }}>
