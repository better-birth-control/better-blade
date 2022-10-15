<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class BetterHeading extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $size,
        public ?string $as = null,
        public ?string $underline = null,
        public ?string $spanClasses = null,
    ) {
        //
    }

    public function getLevel()
    {
        $size = $this->size;
        if ($size === 'display1' || $size === 'display2') {
            $size = 'h1';
        }

        return $this->as ?? $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.heading');
    }
}
