<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\RailwayLine;
class PropertyCreate extends Component
{

    public $railwayLines;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->railwayLines =  RailwayLine::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.property-create');
    }
}