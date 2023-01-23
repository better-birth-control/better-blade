<div {{ $attributes->merge(['class' => 'better-progress-bar']) }} value="{{ intval($current) }}" max="{{ intval($max) }}" x-data="betterprogressbar" role="progressbar" :aria-valuenow="progress" aria-valuemin="0" aria-valuemax="100" x-cloak>
    <div class="bar" :style="{width: barWidth}"></div>
    <div class="max" x-show="!percentageMode" x-text="max + ' ' + append"></div>
</div>
