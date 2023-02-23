<?php

namespace App\View\Components\add_on;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component instance.
     */
    public $app_version;
    public function __construct($app_version)
    {
        $this->app_version = "Version ";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add_on.footer');
    }
}
