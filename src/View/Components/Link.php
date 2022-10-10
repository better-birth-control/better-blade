<?php

namespace BetterBirthControl\Better\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $url = null,
        public ?string $ariaControls = null,
    ) {
        //
    }

    public function isExternal()
    {
      if (! $this->url) {
        return false;
      }

      $url_host = parse_url($this->url, PHP_URL_HOST);
      $base_url_host = parse_url(url('/'), PHP_URL_HOST);

      return $url_host !== $base_url_host && ! empty($url_host);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('better::components.link');
    }
}
