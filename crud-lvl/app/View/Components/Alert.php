<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        //ecxh
        // echo"inside constructor";
        $this->name=$name;
        $this->age=$age;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.alert');
    }
}
