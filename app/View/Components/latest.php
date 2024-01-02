<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class latest extends Component
{

    public $videos;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->videos = Video::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.latest');
    }
}
