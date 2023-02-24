<?php

namespace App\View\Components\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class login extends Component
{
    /**
     * Create a new component instance.
     */
    public $message;
    public function __construct(
        public string $type, $message
    ) {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.login');
    }
}
