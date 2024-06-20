<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public $menuItems ;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menuItems  = [
            ['title'=> 'Menu 1', 'menu'=> 'menu1'],
            ['title'=> 'Menu 2', 'menu'=> 'menu2'],
            ['title'=> 'Menu3', 'menu'=> 'menu3'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-component', [
            'menuItems ' => $this->menuItems,
        ]);
    }
}
