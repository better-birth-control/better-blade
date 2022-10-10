<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class BetterImage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $src,
        public string $width,
        public string $height,
        public ?string $alt = null,
        public bool $eager = false,
        public bool $cover = false,
        public bool $noShadow = false,
        public ?string $caption = null,
        public ?int $maxHeight = null,
        public ?string $objectPosition = null,
        public string $imageClasses = '',
        public array $sources = [],

        public ?int $xs = null,
        public ?int $s = null,
        public ?int $m = null,
        public ?int $l = null,
        public ?int $xl = null,
    ) {
        //
    }

    private function getBps()
    {
        return [
            'xs' => [
                'viewport' => 0,
                'contentWidth' => 90,
                'gutterWidth' => 16,
            ],
            's' => [
                'viewport' => 480,
                'contentWidth' => 90,
                'gutterWidth' => 16,
            ],
            'm' => [
                'viewport' => 768,
                'contentWidth' => 86,
                'gutterWidth' => 24,
            ],
            'l' => [
                'viewport' => 1024,
                'contentWidth' => 86,
                'gutterWidth' => 24,
            ],
            'xl' => [
                'viewport' => 1440,
                'contentWidth' => 86,
                'gutterWidth' => 32,
            ],
        ];
    }

    public function calculateSizes()
    {
        $sizes = [];
        $defaultBp = 'xs';
        foreach (array_reverse($this->getBps()) as $bp => $content) {
            if ($bp === $defaultBp && ! $this->$bp) {
                $sizes[] = $content['contentWidth'].'vw';

                continue;
            }
            if (! $this->$bp) {
                continue;
            }
            $desiredSpace = 12 / $this->$bp;
            $columnWidth = $content['contentWidth'] / $desiredSpace;
            $allGapWidths = $content['gutterWidth'] * round($desiredSpace - 1);
            $size = 'calc('.round($columnWidth, 1).'vw - '.$allGapWidths.'px)';

            if ($bp === $defaultBp) {
                $sizes[] = $size;

                continue;
            }

            $sizes[] = '(min-width: '.$content['viewport'].'px) '.$size;
        }

        return implode(', ', $sizes);
    }

    public function getSources()
    {
        $sources = [];
        foreach ($this->sources as $source) {
            $sources[] = [
                'srcset' => collect($source['srcset'])->map(function ($src, $width) {
                    return $src.' '.$width.'w';
                })->join(', '),
                'type' => $source['type'],
                'sizes' => $this->calculateSizes(),
            ];
        }

        return $sources;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.image');
    }
}
