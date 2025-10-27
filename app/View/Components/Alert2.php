<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $color;
    /**
     * Create a new component instance.
     */


    public function __construct($type= 'info')
    {
            switch ($type) {
                case 'info':     
                    $color = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                    break;
                case 'danger':
                    $color = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
                    break;
                case 'sucess':
                    $color = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
                    break;
                case 'warning':
                    $color = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
                    break;
                case 'dark':
                    $color = 'text-black-800 bg-black-50 dark:bg-gray-800 dark:text-black-400';
                    break;
                
                default:
                    $color = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
                    break;
            }
            $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
