<div {{ $attributes->class([
    'better-progress-bar',
    'append' => !!$append,
])->merge() }} value="{{ intval($current) }}" max="{{ intval($max) }}" x-data="better-progress-bar" role="progressbar" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100" x-cloak>
    <div class="bar" :style="{width: barWidth}"></div>
    <div class="max" x-show="!percentageMode" x-text="max + ' ' + append"></div>
</div>
