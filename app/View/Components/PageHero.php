<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHero extends Component
{
    public $title;
    public $back;
    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $back = null)
    {
        $this->title = $title;
        $this->back = $back;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-hero', [
            'title' => $this->title,
            'back' => $this->back,
        ]);
    }
}
