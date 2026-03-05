<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     */

    public $label;
    public $id;
    public $placeholder;
    public $type;
    public $name;

    public function __construct( $label = null ,  $id = null , $placeholder = null , $type = null , $name = null )
    {
        $this->label = $label;
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
