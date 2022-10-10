<{{ $getLevel() }} {{ $attributes->merge(['class' => 'better-heading ' . $size . ($underline ? ' underline-' . $underline : '')]) }}>
    <span>{{ $slot }}</span>
</{{ $getLevel() }}>
