<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class layout extends Component
{
    /**
     * Create a new component instance.
     */
    // public $video;
     public function __construct( ) {

        // $this->video = $video;
     }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
