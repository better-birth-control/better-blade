<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class BetterLogo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $variant = 'full',
        public string $theme = 'bright',
        public string $svgClasses = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.logo');
    }
}
