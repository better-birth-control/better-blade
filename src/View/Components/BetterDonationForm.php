<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\Support\Facades\Lang;
use Illuminate\View\Component;

class BetterDonationForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getLanguage(): string
    {
        if (in_array(Lang::locale(), ['de', 'en'])) {
            return Lang::locale();
        }

        return 'en';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.donation-form');
    }
}
