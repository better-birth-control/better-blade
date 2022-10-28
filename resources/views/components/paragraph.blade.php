<p {{ $attributes->class([
    'better-paragraph',
    $size,
    'bold' => $bold,
    'no-spacer' => $noSpacer,
    'no-color' => $noColor,
    ])->merge() }}
>
    {{ $slot }}
</p>
