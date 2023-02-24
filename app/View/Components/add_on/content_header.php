<?php

namespace App\View\Components\add_on;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class content_header extends Component
{
    /**
     * Create a new component instance.
     */
    public $header_title;
    public function __construct($headerTitle)
    {
        $this->header_title = $headerTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add_on.content_header');
    }
}
