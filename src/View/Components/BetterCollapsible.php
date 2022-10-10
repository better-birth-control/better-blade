<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;
use Str;

class BetterCollapsible extends Component
{
    public string $headerId;

    public string $contentId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $header,
        public bool $last = false,
        public bool $open = false,
    ) {
        $this->headerId = Str::random();
        $this->contentId = Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.collapsible');
    }
}
