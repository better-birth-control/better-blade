<{{ $getLevel() }} {{ $attributes->merge(['class' => 'better-heading ' . $size . ($underline ? ' underline-' . $underline : '')]) }}>
    <span class="{{ $spanClasses }}">{{ $slot }}</span>
</{{ $getLevel() }}>
