<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class BetterCheckbox extends Component
{
    public string $inputId;

    public string $labelId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public ?string $error = null,
        public bool $required = false,
    ) {
        $this->inputId = Str::random();
        $this->labelId = Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.checkbox');
    }
}
