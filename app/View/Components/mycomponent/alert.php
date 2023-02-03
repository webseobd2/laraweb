<?php

namespace App\View\Components\mycomponent;

use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $type;
     public $message;

    public function __construct($message=null,$type=null)
    {
        $this->message = $message;
        $this->type = $type;

    }

    public function buttonType(){
        switch($this->type){
            case 'danger':
                return 'bg-red-600 text-white';
            break;

            case 'warning':
                return 'bg-yellow-100 text-black';
                break;

                default:
                    return 'bg-green-600 text-white';
                    break;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mycomponent.alert');
    }
}
