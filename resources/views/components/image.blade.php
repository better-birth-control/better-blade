<figure {{ $attributes->class([
    'better-image',
    'cover' => $cover,
    'no-shadow' => $noShadow,
])->merge() }}>
    <picture>
        @foreach($getSources() as $source)
            <source srcset="{{ $source['srcset'] }}" sizes="{{ $source['sizes'] }}" type="{{ $source['type'] }}">
        @endforeach
        <img src="{{ $src }}" alt="{{ $alt }}" width="{{ $width }}" height="{{ $height }}" loading="{{ $eager ? 'eager' : 'lazy' }}" class="{{ $imageClasses }}" style="{{ $objectPosition ? 'object-position: ' . $objectPosition . ';' : '' }} {{ $maxHeight ? 'max-height: ' . $maxHeight . 'px;' : '' }}">
    </picture>
    @if($caption)
        <figcaption>
            {!! $caption !!}
        </figcaption>
    @endif
</figure>
