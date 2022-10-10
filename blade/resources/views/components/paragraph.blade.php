<p {{ $attributes->class([
    'better-paragraph',
    $size,
    'bold' => $bold,
    'no-spacer' => $noSpacer,
    ])->merge() }}
>
    {{ $slot }}
</p>
