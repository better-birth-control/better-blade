<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public string $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public string $size,
        public ?float $strokeWidth = null,
    ) {
        $this->icon = file_get_contents(
          public_path('vendor/better/icons/'.$this->name.'.svg')
        );

        if ($this->strokeWidth) {
            $this->icon = str_replace('stroke-width="1.5"', 'stroke-width="'.$this->strokeWidth.'"', $this->icon);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.icon');
    }
}
