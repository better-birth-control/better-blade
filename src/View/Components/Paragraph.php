<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class Paragraph extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $size,
        public bool $bold = false,
        public bool $noSpacer = false,
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
        return view('better::components.paragraph');
    }
}
