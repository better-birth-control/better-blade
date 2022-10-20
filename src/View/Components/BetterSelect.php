<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class BetterSelect extends Component
{
    public string $inputId;

    public string $labelId;

    public string $helpId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public array $options,
        public ?string $help = null,
        public ?string $error = null,
        public bool $required = false,
    ) {
        $this->inputId = Str::random();
        $this->labelId = Str::random();
        $this->helpId = Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.select');
    }
}
