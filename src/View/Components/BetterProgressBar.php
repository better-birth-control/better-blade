<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;
use Str;

class BetterProgressBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public int|float $current,
        public int|float $max,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.progress-bar');
    }
}
