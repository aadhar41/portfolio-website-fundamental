<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextarea extends Component
{
    public $name;
    public $id;
    public $class;
    public $placeholder;
    public $rows;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $id, $class, $placeholder, $rows)
    {
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->rows = $rows;
    }
    
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input-textarea');
    }
}
