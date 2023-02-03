<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputtext extends Component
{
    public $type;

    public $name;

    public $class;

    public $placeholder;

    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type=null,$name=null,$class=null,$placeholder=null,$label=null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->class = $class;
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputtext');
    }
}
